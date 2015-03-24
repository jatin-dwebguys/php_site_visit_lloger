function __lloogg__() {
    
    var u = __log_client_id;
    var l = document.location;
    var r = (typeof(document.referrer) == 'undefined') ? '' : document.referrer;
    

    var e = function (s) {
        try {
            return encodeURIComponent(s);
        } catch(e) {
            var e = escape(s);
            e = e.replace(/@/g,"%40");
            e = e.replace(/\//g,"%2f");
            e = e.replace(/\+/g,"%2b");
            return e;
        }
    };
    var args='';
    var img=new Image(1,1);
    args += '?u='+e(u);
    args += '&l='+e(l);
    args += '&r='+e(r);
    
    img.src='http://tracker.aekt.net/recv/'+args;
    img.onload = function() { return; };
}
__lloogg__();
