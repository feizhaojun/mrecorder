# mRecorder
A JavaScript plugin for recording in the web page throug user's microphone by Web Audio API, AudioRTC etc.

适用于 Chrome 21+、IE Edge、Firefox 25+、Opera 15+。

# Use
### 1 准备
实例化的时候会执行初始化：

```
var rec = new mRecorder({
    mediaType:'wav',
    callback:function(){}
});
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

# 重要更新

因为很多页面场景不需要打开页面的时候就 new mRecorder()，而是需要在点击按钮的时候初始化，并开始录音（rec.start()），但是因为JS的异步原理，可能执行 new mRecorder() 的时候不能立即初始化start方法，所以会出现rec.start不是一个函数。

本次更新允许在初始化的时候传入一个回调函数，如下：
```
$('.start-record-btn').on('click',function(){
    var rec = new mRecorder({
        callback:function(){
            rec.start();
            window.rec = rec;
        }
    });
});

```

[联系作者](https://feizhaojun.com/contact.html)