# Hell-Universe

New-Star 是一个网页浏览器游戏引擎。这项工作的目标是完全重启 2Moons：全新的设计、全新的游戏玩法以及更多内容。这个开源的浏览器游戏框架基于 [2Moons](https://github.com/jkroepke/2Moons)。

## Hell-Universe 网站

想了解更多关于此游戏的信息吗？请访问原作者的 [网站](https://yaro2709.github.io/New-Star-website)。

## Hell-Universe 画廊

还有一个项目的[画廊](https://yaro2709.github.io/New-Star-website/gallery)，任何人都可以通过视觉方式熟悉该项目。

## Hell-Universe 社区

想了解最新的开发进展吗？请访问我们的 [博客](https://kuiyr.me/)、[Telegram]()！

## 仓库结构

- `cache/` - 临时缓存的服务器 .tpl 网页
- `chat/` - AJAX 游戏内客户端聊天
- `includes/`
  - 游戏引擎
  - 配置
  - 管理
  - 数据库结构
  - 外部库
  - 网页功能
- `install/`
  - 首次安装
  - 数据库创建
- `language/` - 翻译：EN, RU
- `licenses/` - 开源许可方案
- `sound/` - 媒体文件
- `mods/` - 不提供支持的修改
- `scripts/` - 客户端网页浏览器 .js 脚本
- `styles/`
  - 网页 .css 模板
  - 网页 .tpl 模板
  - 字体
  - 图片

## 本地安装

- 克隆仓库: `git clone https://github.com/New-Star/New-Star`
- 安装组件: `apt install apache2 php7.3 php7.3-gd php7.3-fpm php7.3-mysql php7.3-curl php-ds libapache2-mod mysql-server`
- 设置 MySQL: `create user USER identified by PASSWORD; create database DB; grant all privileges on DB.* to USER;`
- 设置目录写权限: `cache/`, `includes/`
- 运行向导: `127.0.0.1/install/install.php`
