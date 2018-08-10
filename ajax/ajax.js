function ajax(params) {
    if (typeof params != "object") {
        console.error("参数类型不对")
        return;
    }

    if (!params.url) {
        console.error("请输入你的地址")
        return;
    }

    var url = params.url;
    var type = params.type || "get"
    var data = params.data
    if (typeof data == "object") {
        str = ""
        for (var i in data) {
            str += i + "=" + data[i] + "&"
        }
        str = str.slice(0, -1)

        data = str;
    }


    var obj = new XMLHttpRequest()

    obj.onload=function (ev) {
        params.success(obj.response)
    }

    if (type == "get") {
        obj.open("get",url+"?"+data)
        obj.send()
    }else if(type=="post"){
        obj.open("post",url)
        obj.setRequestHeader("content-type","application/x-www-form-urlencoded")
        obj.send(data)
    }


}