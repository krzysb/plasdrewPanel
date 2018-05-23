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
    //    ADD-PROJECT
    $('#materialSelect').on('change', function () {
        var selected = $(this).find(':selected').data("category");
        if (selected == "1") {
            $('#sizeSelect').val("Sklejka 3 mm").change();
        }
        else {
            $('#sizeSelect').val("Plaster 7-8 cm").change();
        }
        $("#sizeSelect option").each(function (item) {
            var element = $(this);
            if (element.data("category") != selected) {
                element.hide();
            }
            else {
                element.show();
            }
        });
    });
    $('newProject__item #materialSelect').val($('#materialSelect').val()).change();
    var selected = $('#materialSelect').find(':selected').data("category");
    $("#sizeSelect option").each(function (item) {
        var element = $(this);
        if (element.data("category") != selected) {
            element.hide();
        }
        else {
            element.show();
        }
    });
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
})));