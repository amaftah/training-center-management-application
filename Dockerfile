FROM php:latest
RUN apt-get update && apt-get install -y apache2
COPY . /workspaces/training-center-management-application

EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]