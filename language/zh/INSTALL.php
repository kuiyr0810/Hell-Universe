<?php
// 由 kuiyr0810(Sunshine.) 翻译;
// All rights reserved from 2025;

//NAVIGATION:
//{IDs_0001} General variables
//{IDs_0002} Introduction
//{IDs_0003} Update
//{IDs_0004} Test for minimum requirements
//{IDs_0005} Connect to the database
//{IDs_0006} Results of connecting to the database
//{IDs_0007} Database creation
//{IDs_0008} Create an account
//{IDs_0009} Complete the installation
//{IDs_0010} Installation summary
//{IDs_0011} Messages
//{IDs_0012} Carousels

//{IDs_0001} General variables
//{IDs_0001} 常规变量
$LNG['game_name']                                    = 'New-Star';
$LNG['nav_lang']                                     = '语言';
$LNG['footer_up']                                    = '返回顶部';
$LNG['back']                                         = '返回';
$LNG['continue']                                     = '下一步';
$LNG['login']                                        = '登录到管理面板';
$LNG['title_install']                                = '安装程序';
$LNG['previous']                                     = '';
$LNG['next']                                         = '';
//{IDs_0002} Introduction
//{IDs_0002} 介绍
$LNG['intro_install']                                = '安装';
$LNG['intro_welcome']                                = '欢迎来到 '.$LNG['game_name'].'!';
$LNG['intro_text']                                   = ''.$LNG['game_name'].' - 最好的网页浏览器策略引擎之一，基于 2Moons v1.8。'.$LNG['game_name'].' 是目前最稳定和正在开发的引擎。我们希望 '.$LNG['game_name'].' 会比您期望的更好。如果您有任何问题，请咨询我们。'.$LNG['game_name'].' 是一个开源项目，并根据 GNU GPL v3 获得许可。在安装之前，将启动一个小的测试，以检查是否符合最低要求。';
//{IDs_0003} Update
//{IDs_0003} 更新
$LNG['upgrade_title']                                = '更新';
$LNG['upgrade_header']                               = '数据库更新向导。';
$LNG['upgrade_text']                                 = '您已经安装了 '.$LNG['game_name'].'，只想更新它？在这里，您只需点击几下即可更新您的旧数据库！';
$LNG['upgrade_success']                              = '数据库已成功更新到版本 %s。';
$LNG['upgrade_nothingtodo']                          = '无需操作，数据库的版本状态为 %s。';
$LNG['upgrade_available']                            = '有可用的更新。数据库可以从当前版本 %s 升级到版本 %s。';
$LNG['upgrade_notavailable']                         = '数据库使用的是最新的版本 %s。';
//{IDs_0004} Test for minimum requirements
//{IDs_0004} 最低要求测试
$LNG['req_head']                                     = '所需模块';
$LNG['req_text']                                     = '在继续安装之前，'.$LNG['game_name'].' 将检查您的服务器配置文件，以确保符合使用 '.$LNG['game_name'].' 的必要要求。请仔细阅读结果，并在所有项目都完成验证之前不要继续安装。如果您想使用下面列出的模块的任何功能，您必须确保验证通过。';
$LNG['req_requirements']                             = '要求';
$LNG['req_status']                                   = '状态';
$LNG['reg_yes']                                      = '是';
$LNG['reg_no']                                       = '否';
$LNG['reg_writable']                                 = '(CHMOD 777)';
$LNG['reg_not_writable']                             = '没有写入权限';
$LNG['reg_file']                                     = '文件 "%s" 是否可写？';
$LNG['reg_dir']                                      = '文件夹 "%s" 是否可写？';
$LNG['req_php_need']                                 = '已安装的 "PHP" 版本';
$LNG['req_php_need_desc']                            = 'PHP 是编写游戏的服务器语言。'.$LNG['game_name'].' 使用 PHP v5.6-8.0';
$LNG['reg_gd_need']                                  = '已安装的 "gdlib" 图形库版本';
$LNG['reg_gd_desc']                                  = '"gdlib" 图形库负责动态生成图像。没有这个库，某些软件功能将无法使用。';
$LNG['reg_pdo_active']                               = '支持扩展 "PDO"';
$LNG['reg_pdo_desc']                                 = '您必须在 PHP 中提供 PDO 支持。';
$LNG['reg_json_need']                                = '是否有可用的 "JSON" 扩展？';
$LNG['reg_iniset_need']                              = 'PHP "ini_set" 函数是否处于活动状态？';
$LNG['reg_global_need']                              = '"register_globals" 参数是否被禁用？';
$LNG['reg_global_desc']                              = '如果启用此选项，'.$LNG['game_name'].' 将正常工作。但是，出于安全原因，建议在 PHP 设置中禁用 register_globals。';
$LNG['req_ftp_head']                                 = 'FTP';
$LNG['req_ftp_desc']                                 = '请输入您的 FTP 详细信息，以便安装程序自动修复错误。此外，您还可以手动分配写入权限。';
$LNG['req_ftp_host']                                 = 'FTP 主机';
$LNG['req_ftp_username']                             = 'FTP 登录名';
$LNG['req_ftp_password']                             = 'FTP 密码';
$LNG['req_ftp_dir']                                  = 'FTP 路径到 '.$LNG['game_name'].'';
$LNG['req_ftp_send']                                 = '设置 CHMOD 777 权限';
$LNG['req_ftp_error_data']                           = '无法使用提供的凭据连接到 FTP 服务器。';
$LNG['req_ftp_error_dir']                            = '文件夹指定不正确。';
//{IDs_0005} Connect to the database
//{IDs_0005} 连接到数据库
$LNG['step1_head']                                   = '设置数据库访问权限';
$LNG['step1_text']                                   = ''.$LNG['game_name'].' 可以在您的服务器上安装，但您必须指定数据库访问设置。如果您不知道连接到数据库的访问设置，请从您的主机提供商处获取，或联系 '.$LNG['game_name'].' 的技术支持进行咨询。输入数据时，请在继续之前仔细检查。';
$LNG['step1_mysql_server']                           = '数据库服务器名称';
$LNG['step1_mysql_port']                             = '数据库服务器端口';
$LNG['step1_mysql_dbuser']                           = '数据库用户登录名';
$LNG['step1_mysql_dbpass']                           = '数据库用户密码';
$LNG['step1_mysql_dbname']                           = '数据库名称';
$LNG['step1_mysql_prefix']                           = '表前缀';
//{IDs_0006} Results of connecting to the database
//{IDs_0006} 连接到数据库的结果
$LNG['step2_prefix_invalid']                         = '数据库前缀只能包含字母数字字符和下划线。';
$LNG['step2_db_no_dbname']                           = '未指定数据库名称。';
$LNG['step2_db_too_long']                            = '指定的表前缀太长。最大长度为 36 个字符。';
$LNG['step2_db_con_fail']                            = '没有数据库连接。详细信息如下列出。';
$LNG['step2_config_exists']                          = 'config.php 已经存在。';
$LNG['step2_conf_op_fail']                           = '未为 config.php 设置写入权限。';
$LNG['step2_db_done']                                = '已建立与数据库的连接。';
//{IDs_0007} Database creation
//{IDs_0007} 数据库创建
$LNG['step3_head']                                   = '创建数据库表';
$LNG['step3_text']                                   = '数据库表已创建并填充。继续下一步以完成 '.$LNG['game_name'].' 的安装。';
$LNG['step3_db_error']                               = '无法在数据库中创建以下表：';
//{IDs_0008} Create an account
//{IDs_0008} 创建帐户
$LNG['step4_head']				                     = '管理员帐户';
$LNG['step4_text']				                     = '安装向导现在将为您创建一个管理员帐户。写入使用的名称、您的密码和您的电子邮件';
$LNG['step4_admin_name']		                     = '使用的管理员名称：';
$LNG['step4_admin_name_desc']	                     = '输入长度为 3 到 20 个字符的名称以供使用';
$LNG['step4_admin_pass']		                     = '管理员密码：';
$LNG['step4_admin_pass_desc']	                     = '输入长度为 6 到 30 个字符的密码';
$LNG['step4_admin_mail']		                     = '联系电子邮件：';
//{IDs_0009} Complete the installation
//{IDs_0009} 完成安装
$LNG['step6_head']                                   = '恭喜！您已设置 '.$LNG['game_name'].' :) ';
$LNG['step6_text']                                   = '如果您点击下面的按钮，您将被重定向到管理面板。花一些时间熟悉可用的设置。在使用游戏之前，请删除文件 "includes/ENABLE_INSTALL_TOOL" 或将其重命名。只要此文件存在，您的游戏就存在潜在的黑客风险！';
$LNG['step8_need_fields']                            = '您必须填写所有字段。';
//{IDs_0010} Installation summary
//{IDs_0010} 安装摘要
$LNG['sql_close_reason']                             = '服务器当前不可用';
$LNG['sql_welcome']                                  = '欢迎来到 '.$LNG ['game_name'].' v';
//{IDs_0011} Messages
//{IDs_0011} 信息
$LNG['locked_upgrade']                               = '需要更新数据库！要激活更新过程，您必须在 "include" 文件夹中创建一个名为 "ENABLE_INSTALL_TOOL" 的文件。文件名必须为大写。文件本身可以为空。';
$LNG['locked_install']                               = '安装程序已锁定！在 "includes" 文件夹中，创建一个名为 "ENABLE_INSTALL_TOOL" 的文件。文件名必须为大写。文件本身必须没有扩展名，并且可以为空。出于安全原因，强烈建议您在安装完成后重命名或删除该文件。为了可靠性，您可以删除整个 install 文件夹。';
//{IDs_0012} Carousels
//{IDs_0012} 轮播
$LNG['carousel_project_head']                        = '项目。';
$LNG['carousel_project_text']                        = '游戏基于 2Moons v1.8。我们通过重写超过 30% 的代码对其进行了改进！';
$LNG['carousel_mods_head']                           = '修改。';
$LNG['carousel_mods_text']                           = '我们开发了超过 15 个新的修改，并重写了超过 10 个！';
$LNG['carousel_design_head']                         = '响应式设计。';
$LNG['carousel_design_text']                         = '我们使用著名的 bootstrap。';
$LNG['carousel_support_head']                        = '积极支持。';
$LNG['carousel_support_text']                        = '支持基于 2Moons 论坛和 github 项目。';
$LNG['carousel_version_info_head']                   = '有什么新东西吗？';
$LNG['carousel_version_info_text']                   = '当然，有！但要了解，您需要安装游戏 :)';
