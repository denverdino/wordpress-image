FROM wordpress:4.4
MAINTAINER Li Yi <denverdino@gmail.com>
COPY sources.list /etc/apt/sources.list
COPY aliyun-oss-support-2.3.2.zip /tmp/aliyun-oss-support-2.3.2.zip
RUN echo Asia/Shanghai > /etc/timezone && cp /usr/share/zoneinfo/Asia/Shanghai /etc/localtime
RUN apt-get update && \
  apt-get -y install unzip && \
  rm -rf /var/lib/apt/lists/*
RUN curl -L https://downloads.wordpress.org/plugin/wp-acceleration-for-china.zip -o /tmp/wp-acceleration-for-china.zip && \
  unzip -uo /tmp/wp-acceleration-for-china.zip -d /usr/src/wordpress/wp-content/plugins/
RUN unzip -uo /tmp/aliyun-oss-support-2.3.2.zip -d /usr/src/wordpress/wp-content/plugins/

