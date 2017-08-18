# mRecorder
A JavaScript plugin for recording in the web page throug user's microphone by Web Audio API, AudioRTC etc.

# Use
### 1 准备
实例化的时候会执行初始化：

```
var rec = new mRecorder;
```

初始化的含义是指：

通过getUserMedia接口获取用户媒体设备权限，用户需要在初始化的时候授权网页允许访问麦克风。

所以，你可以根据情境需要，在页面加载的时候执行初始化，或者，在用户点击录音按钮的时候执行初始化。

### 2 录音（包括重新开始录音）
rec.start();

### 3 停止录音
rec.stop();

### 4 获取录制的音频文件
rec.getBlob();

### 5 获取录制的音频文件的URL
rec.getURL();

### 6 Ajax上传（实验功能）
rec.upload('url',callback);

==暂时不提供暂停和继续录音功能==

[联系作者](https://feizhaojun.com/contact.html)
