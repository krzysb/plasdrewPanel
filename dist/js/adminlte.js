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
    $(".project-add-form__close a").click(NewProjectFormVisabilityClose);
    //    $("a.editProjectButton").click(showProjectFormVisability);
    //
    function changeNewProjectFormVisability() {
        $("#project-add-form").toggle();
        $(".project-add .fa-minus").toggle();
        $(".project-add .fa-plus").toggle();
    }

    function NewProjectFormVisabilityClose() {
        document.getElementById("project-add-form").style.display = "none";
        window.location('http://localhost/plasdrew/admin/dashboard2.php');
    }
    //    DRAGABLE
//    dragElement(document.getElementById(("project-add-form")));
    $("#project-add-form").draggable({
        start: function () {
            $("#project-add-form").css('position', 'absolute');
        }
        , drag: function () {
            
        }
        , stop: function () {
           
        }
    });
})));