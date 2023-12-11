"use strict";


document.addEventListener("DOMContentLoaded", function () {
    const tableContainer = document.querySelector('.table-container');
    new SimpleBar(tableContainer, { autoHide: false });
});
