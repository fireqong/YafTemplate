### 简介
为了更好地使用yaf, 特意制作该模板, 且提供了创建常用组件的工具

### 环境依赖
- yaf扩展
- composer


### 安装

```shell
composer create-project church/yaf-template yaf-website dev-master
```

### 工具使用
```shell
php console #查看可用命令
php console make:controller Articles	#创建控制器
php console make:model Articles	#创建模型
php console make:plugin Test	#创建插件
```


> 注意: 为了使用命名空间的方式和支持composer, 必须在php.ini加上

```conf
[Yaf]
yaf.use_namespace = True
yaf.use_spl_autoload = True
```