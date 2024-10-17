FROM nginx:1.27
RUN rm /etc/nginx/conf.d/default.conf
COPY default.conf /etc/nginx/conf.d/
WORKDIR /app
RUN mkdir -p /app
EXPOSE 8080 
CMD ["nginx", "-g", "daemon off;"]

