# SimpleServerStatus
<a target="_blank" href="https://github.com/CodereInc/SimpleServerStatus"><img src="https://img.shields.io/github/stars/CodereInc/SimpleServerStatus" /></a> 
<a target="_blank" href="https://github.com/CodereInc/SimpleServerStatus"><img src="https://img.shields.io/github/last-commit/CodereInc/SimpleServerStatus" /></a>
<a target="_blank" href="https://github.com/CodereInc/SimpleServerStatus"><img src="https://img.shields.io/github/v/release/CodereInc/SimpleServerStatus" />
[![GitHub Sponsors](https://img.shields.io/github/sponsors/CodereInc?label=GitHub%20Sponsors)](https://github.com/sponsors/CodereInc)
[![State-of-the-art Shitcode](https://img.shields.io/static/v1?label=State-of-the-art&message=Shitcode&color=7B5804)](https://github.com/trekhleb/state-of-the-art-shitcode)

这是一个很简单的服务器探针，遵循GPLv3协议发行
## 如何使用？
### 服务端
1.在服务端上安装nginx和php7.2,如果已经有的可以忽略
```bash
git clone https://github.com/CodereInc/SimpleServerStatus.git

```
然后将SimpleServerStatus目录下的所有文件复制到你的网站目录下，然后创建一个名为json的目录，然后编辑api.php,将第三行的YOUR_PASSWORD改成一个密码。
### 客户端
```bash
git clone https://github.com/CodereInc/SimpleServerStatus.git

```
然后编辑client.py
其中有三句代码：
```bash
device_name = "YOUR_DEVICE_NAME"
password = "YOUR_PASSWORD"
url = "YOUR_API_URL"
```
将YOUR_DEVICE_NAME改成你的设备名，YOUR_PASSWORD改成服务端设置的密码，url设置成http://你的域名或IP/api.php
然后在终端运行
```bash
pip3 install math random numpy psutil requests interval
screen -r SimpleServerStatus
python client.py
```
然后访问你的http://你的域名或IP/device.html就能看见设备了