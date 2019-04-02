# イメージファイルをCentOS7に設定
FROM centos:7.3.1611

# 実行コマンド設定
## nginx
RUN rpm -ivh http://nginx.org/packages/centos/7/noarch/RPMS/nginx-release-centos-7-0.el7.ngx.noarch.rpm
RUN yum -y update nginx-release-centos
RUN yum -y --enablerepo=nginx install nginx
RUN mv /etc/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf.bk
ADD default.conf /etc/nginx/conf.d/
RUN systemctl enable nginx

## node.js,npm
RUN yum -y install epel-release bzip2
RUN yum -y update openssl
RUN yum-config-manager --enable cr
RUN yum -y install nodejs npm
RUN npm install -g n
#RUN n latest

RUN npm install -g npm-check-updates
RUN npm install -g yarn

# 起動時実行コマンド
CMD ["/sbin/init"]
