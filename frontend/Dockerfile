FROM node:14

COPY package*.json ./
RUN npm install
# Loyihaning ildiz katalogidagi fayllarni konteynerga nusxalash
COPY . /var/www/html/

# Working directoryni belgilash
WORKDIR /var/www/html

RUN npm run build