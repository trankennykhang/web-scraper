FROM php:8.0.23-fpm-bullseye
RUN apt update
RUN apt install -y libzip-dev libnss3-tools
RUN apt install -y git
RUN apt-get install -y wget unzip
# Set up the Chrome PPA
RUN apt install -y gnupg gnupg1 gnupg2
RUN wget -q -O - https://dl-ssl.google.com/linux/linux_signing_key.pub | apt-key add -
RUN echo "deb http://dl.google.com/linux/chrome/deb/ stable main" >> /etc/apt/sources.list.d/google.list
RUN apt update
# Update the package list and install chrome
RUN apt-get install -y google-chrome-stable
# Set up Chromedriver Environment variables
ENV CHROMEDRIVER_VERSION 105.0.5195.52
ENV CHROMEDRIVER_DIR /chromedriver
RUN mkdir $CHROMEDRIVER_DIR
# Download and install Chromedriver
RUN wget -q --continue -P $CHROMEDRIVER_DIR "http://chromedriver.storage.googleapis.com/$CHROMEDRIVER_VERSION/chromedriver_linux64.zip"
RUN unzip $CHROMEDRIVER_DIR/chromedriver* -d $CHROMEDRIVER_DIR
# Put Chromedriver into the PATH
ENV PATH $CHROMEDRIVER_DIR:$PATH
RUN docker-php-ext-install zip
RUN docker-php-ext-install mysqli
COPY docker/composer.phar /usr/local/bin/composer
RUN chmod 755 /usr/local/bin/composer
COPY docker/init.sh /usr/local/bin/
RUN chmod 755 /usr/local/bin/init.sh