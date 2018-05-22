(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) : typeof define === 'function' && define.amd ? define(['exports'], factory) : (factory((global.adminlte = {})));
}(this, (function (exports) {
    'use strict';
    var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) {
        return typeof obj;
    } : function (obj) {
        return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
    };
    //   MAIN  
    //        FUNCTION
    $(".project-add i").click(changeNewProjectFormVisability);
    //    $(".project-add-form__close a").click(NewProjectFormVisabilityClose);
    //    $("a.editProjectButton").click(showProjectFormVisability);
    //
    function changeNewProjectFormVisability() {
        $("#project-add-form").toggle();
        $(".project-add .fa-minus").toggle();
        $(".project-add .fa-plus").toggle();
    }

    function NewProjectFormVisabilityClose() {
        document.getElementById("project-add-form").style.display = "none";
        window.location('index.php');
    }
    //OPERATOR
    $("#closeProjectMessageButon").click(function () {
        window.location('index.php');
    });
    $('.alert').on('closed.bs.alert', function () {
        //        window.location.href = "index.php";
    });
    //    ORDER
    $("#orderProjects").on('change', function () {
        window.location.href = `?order=${this.value}`;
    });
    //    DRAGABLE
    //    dragElement(document.getElementById(("projec  t-add-form")));
    $("#project-add-form").draggable({
        start: function () {
            $("#project-add-form").css('position', 'absolute');
        }
        , drag: function () {}
        , stop: function () {}
    });
    ////////pagination
    $.fn.pageMe = function (opts) {
        var $this = this
            , defaults = {
                perPage: 7
                , showPrevNext: false
                , hidePageNumbers: false
            }
            , settings = $.extend(defaults, opts);
        var listElement = $this;
        var perPage = settings.perPage;
        var children = listElement.children();
        var pager = $('.pager');
        if (typeof settings.childSelector != "undefined") {
            children = listElement.find(settings.childSelector);
        }
        if (typeof settings.pagerSelector != "undefined") {
            pager = $(settings.pagerSelector);
        }
        var numItems = children.size();
        var numPages = Math.ceil(numItems / perPage);
        pager.data("curr", 0);
        if (settings.showPrevNext) {
            $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
        }
        var curr = 0;
        while (numPages > curr && (settings.hidePageNumbers == false)) {
            $('<li><a href="#" class="page_link">' + (curr + 1) + '</a></li>').appendTo(pager);
            curr++;
        }
        if (settings.showPrevNext) {
            $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
        }
        pager.find('.page_link:first').addClass('active');
        pager.find('.prev_link').hide();
        if (numPages <= 1) {
            pager.find('.next_link').hide();
        }
        pager.children().eq(1).addClass("active");
        children.hide();
        children.slice(0, perPage).show();
        pager.find('li .page_link').click(function () {
            var clickedPage = $(this).html().valueOf() - 1;
            goTo(clickedPage, perPage);
            return false;
        });
        pager.find('li .prev_link').click(function () {
            previous();
            return false;
        });
        pager.find('li .next_link').click(function () {
            next();
            return false;
        });

        function previous() {
            var goToPage = parseInt(pager.data("curr")) - 1;
            goTo(goToPage);
        }

        function next() {
            goToPage = parseInt(pager.data("curr")) + 1;
            goTo(goToPage);
        }

        function goTo(page) {
            var startAt = page * perPage
                , endOn = startAt + perPage;
            children.css('display', 'none').slice(startAt, endOn).show();
            if (page >= 1) {
                pager.find('.prev_link').show();
            }
            else {
                pager.find('.prev_link').hide();
            }
            if (page < (numPages - 1)) {
                pager.find('.next_link').show();
            }
            else {
                pager.find('.next_link').hide();
            }
            pager.data("curr", page);
            pager.children().removeClass("active");
            pager.children().eq(page + 1).addClass("active");
        }
    };
    $(document).ready(function () {
        $('#myTable').pageMe({
            pagerSelector: '#myPager'
            , showPrevNext: true
            , hidePageNumbers: false
            , perPage: 4
        });
    });
})));