CREATE USER 'yuramaru'@'%' IDENTIFIED BY 'yuramaru_pass';

GRANT ALL PRIVILEGES ON *.* TO 'yuramaru'@'%';

FLUSH PRIVILEGES;

