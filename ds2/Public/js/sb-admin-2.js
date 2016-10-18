$(function() {

    $('#side-menu').metisMenu();

});

function fomateDate(oDate, sFomate) {
    sFomate = sFomate.replace("YYYY", oDate.getFullYear());
    sFomate = sFomate.replace("YY", String(oDate.getFullYear()).substr(2))
    if (oDate.getMonth() < 9) {
        sFomate = sFomate.replace("MM", "0" + (oDate.getMonth()+1));
    } else {
        sFomate = sFomate.replace("MM", (oDate.getMonth()+1));
    }
    if (oDate.getDate() < 10) {
        sFomate = sFomate.replace("DD", "0" + oDate.getDate());
    } else {
        sFomate = sFomate.replace("DD", oDate.getDate());
    }
    sFomate = sFomate.replace("hh", oDate.getHours());
    sFomate = sFomate.replace("mm", oDate.getMinutes());
    sFomate = sFomate.replace("ss", oDate.getSeconds());

    return sFomate;
}

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});

var options = {
    "language": {
        "sProcessing": "处理中...",
        "sLengthMenu": "显示 _MENU_ 项结果",
        "sZeroRecords": "没有匹配结果",
        "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
        "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
        "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
        "sInfoPostFix": "",
        "sSearch": "搜索:",
        "sUrl": "",
        "sEmptyTable": "表中数据为空",
        "sLoadingRecords": "载入中...",
        "sInfoThousands": ",",
        "oPaginate": {
            "sFirst": "首页",
            "sPrevious": "上页",
            "sNext": "下页",
            "sLast": "末页"
        },
        "oAria": {
            "sSortAscending": ": 以升序排列此列",
            "sSortDescending": ": 以降序排列此列"
        }
    },
    "aoColumnDefs": [
        { "sWidth": "5%", "aTargets": [0] },
        { "sWidth": "30%", "aTargets": [1] },
        { "sWidth": "45%", "aTargets": [2] },
        { "sWidth": "10%", "aTargets": [3] },
        { "sWidth": "10%", "aTargets": [4] }
    ],
    "iDisplayLength": 10,
    "lengthMenu": [
        [5, 10, 15],
        [5, 10, 15]
    ]
};
DataTable = function(options) {

};

Date.prototype.toString = function() {
    if (arguments.length > 0) {
        var formatStr = arguments[0];
        var str = formatStr;

        str = str.replace(/yyyy|YYYY/, this.getFullYear());
        str = str.replace(/yy|YY/, (this.getFullYear() % 100) > 9 ? (this.getFullYear() % 100).toString() : "0" + (this.getFullYear() % 100));

        str = str.replace(/MM/, this.getMonth() + 1 > 9 ? (this.getMonth() + 1).toString() : "0" + (this.getMonth() + 1));
        str = str.replace(/M/g, (this.getMonth() + 1).toString());

        str = str.replace(/dd|DD/, this.getDate() > 9 ? this.getDate().toString() : "0" + this.getDate());
        str = str.replace(/d|D/g, this.getDate());

        str = str.replace(/hh|HH/, this.getHours() > 9 ? this.getHours().toString() : "0" + this.getHours());
        str = str.replace(/h|H/g, this.getHours());

        str = str.replace(/mm/, this.getMinutes() > 9 ? this.getMinutes().toString() : "0" + this.getMinutes());
        str = str.replace(/m/g, this.getMinutes());

        str = str.replace(/ss|SS/, this.getSeconds() > 9 ? this.getSeconds().toString() : "0" + this.getSeconds());
        str = str.replace(/s|S/g, this.getSeconds());

        return str;

    } else {
        return this.toLocaleString();
    }
}
