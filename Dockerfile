FROM webdevops/php-nginx:8.3-alpine

ENV WEB_DOCUMENT_INDEX index.html

COPY . /app
