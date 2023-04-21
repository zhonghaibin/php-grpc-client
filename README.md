## 通过php请求grpc服务端
php版本：
php >= 8.1

## 安装
```
将此行添加到 php.ini 文件中的任意位置

extension=php_grpc.dll

composer install
```
## 启动服务 
```
命令行输入：

php -S 127.0.0.1:8080

打开浏览器进行访问 http://127.0.0.1:8080
```


参考文档：

https://cloud.google.com/php/grpc?hl=zh-cn#using-pecl
