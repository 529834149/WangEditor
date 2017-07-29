# Laravel-WangEditor

WangEditor for Laravel 5.

>  [`wangEditor`](http://www.wangEditor.com) 是一款基于javascript和css开发的html富文本编辑器，开源免费。

[![Latest Stable Version](https://poser.pugx.org/seaony/wangeditor/v/stable.svg?format=flat-square)](https://packagist.org/packages/seaony/wangeditor)
[![Latest Unstable Version](https://poser.pugx.org/seaony/wangeditor/v/unstable.svg?format=flat-square)](https://packagist.org/packages/seaony/wangeditor)
[![License](https://poser.pugx.org/seaony/wangeditor/license?format=flat-square)](https://packagist.org/packages/seaony/wangeditor)
[![Total Downloads](https://poser.pugx.org/seaony/wangeditor/downloads?format=flat-square)](https://packagist.org/packages/seaony/wangeditor)


## Install

```shell
$ composer require "seaony/wangeditor:~1.0"
```

## Contributing

1. 将下面这行添加到 `config/app.php` 中 `providers` 数组里：

    ```php
    Seaony\WangEditor\WangEditorProvider::class,
    ```

2. 发布资源与配置文件 (在你的命令行中运行)

    ```php
    $ php artisan vendor:publish --provider='Seaony\WangEditor\WangEditorProvider'
    ```

3. 在你的模板中引入资源文件,`id` 为你的编辑器容器 id

    ```php
    @include('vendor.wangeditor.initialize', ['id' => 'PickEditor'])
    ```

# 七牛云支持

如果你想使用七牛云储存：

1.安装和配置 [laravel-filesystem-qiniu](https://github.com/overtrue/laravel-filesystem-qiniu)

2.配置 `config/wangeditor.php` 的 `disk` 为 `qiniu`:

```php
'upload' => [

    ...
    
    'disk' => 'qiniu'
],
```

# 阿里云支持

如果你想使用阿里云存储：

1.安装和配置 [aliyun-oss-storage](https://github.com/jacobcyl/Aliyun-oss-storage)

2.配置 `config/wangeditor.php` 的 `disk` 为 `aliyun`:

```php
'upload' => [

    ...
    
    'disk' => 'aliyun'
],
```

# 又拍云支持

请参考 `七牛云支持` 和 `阿里云支持`

# Thanks
[@overtrue](https://github.com/overtrue)

# License

MIT
