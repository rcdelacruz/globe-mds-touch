function getCookie(c_name) {
        var i,x,y,ARRcookies=document.cookie.split(";");
        for (i=0;i<ARRcookies.length;i++) {
                x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
                y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
                x=x.replace(/^\s+|\s+$/g,"");
                if (x==c_name) {
                        return unescape(y);
                }
        }
}

function setCookie(c_name,value,exdays) {
        var exdate=new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
        document.cookie=c_name + "=" + c_value;
}

function deleteCookie(name) {
    setCookie(name,"",-1);
}

function set_name(form) {
        var mob_tel = document.getElementById('mobtel').value;
        if (mob_tel != "") {
                if (confirm("Are you sure you want this saved as your number?")) {
                        setCookie ("mob_tel", mob_tel, 365);
                        //window.history.go(0);
                }
        } 
//else alert("Geez, at least enter something, entering nothing will cause an error.");
}
