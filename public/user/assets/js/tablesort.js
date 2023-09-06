/**
 * Menyortir Tabel HTML
 * 
 * @param {HTMLTableElement} table tabel untuk disortir
 * @param {number} column index kolom untuk disortir
 * @param {boolean} asc menentukan apakah pengurutan akan dalam urutan ascending
 */
function sortTableByColumn(table, column, asc = true) {
    const tBody = table.tBodies[0];
    const rows = Array.from(tBody.querySelectorAll("tr"));

    const sortedRows = rows.sort((a, b) => {
        const aColText = a.querySelector(`td:nth-child(${column + 1})`).textContent.trim();
        const bColText = b.querySelector(`td:nth-child(${column + 1})`).textContent.trim();

        return (asc ? 1 : -1) * aColText.localeCompare(bColText);
    });

    sortedRows.forEach(row => tBody.appendChild(row));

    table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-sort-asc", asc);
    table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-sort-desc", !asc);
}

function toggleSortOrder(icon) {
    if (icon.getAttribute("data-order") === "asc") {
        icon.setAttribute("data-order", "desc");
        icon.classList.remove("fa-sort");
        icon.classList.add("fa-sort-up");
    } else {
        icon.setAttribute("data-order", "asc");
        icon.classList.remove("fa-sort-up");
        icon.classList.add("fa-sort-down");
    }
}

document.querySelectorAll(".table-sortable th").forEach(headerCell => {
    headerCell.addEventListener("click", () => {
        const tableElement = headerCell.closest("table");
        const headerIndex = Array.from(headerCell.parentElement.children).indexOf(headerCell);
        const sortIcon = headerCell.querySelector("i");

        toggleSortOrder(sortIcon);
        sortTableByColumn(tableElement, headerIndex, sortIcon.getAttribute("data-order") === "asc");
    });
});

// /**
//  * Menyortir Tabel HTML
//  * 
//  * @param {HTMLTableElement} table tabel untuk menyortir
//  * @param {number} column index kolom untuk sortir
//  * @param {boolean} asc menentukan jika sorting akan masuk ascending
//  */
// function sortTableByColumn(table, column, asc = true){
//     const dirModifier = asc ? 1 : -1;
//     const tBody = table.tBodies[0];
//     const rows = Array.from(tBody.querySelectorAll("tr"));

//     // sortir tiap baris
//     const sortedRows = rows.sort((a, b) => {
//         const aColText = a.querySelector(`td:nth-child(${column + 1})`).textContent.trim();
//         const bColText = b.querySelector(`td:nth-child(${column + 1})`).textContent.trim();

//         return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
//     });
    
//     // Menghilangkan semua rows yang ada pada tabel
//     while (tBody.firstChild){
//         tBody.removeChild(tBody.firstChild);
//     }

//     // kembali menambahkan sorting rows terbaru
//     tBody.append(...sortedRows);

//     // ingat bagaimana saat ini kolom di sortir
//     table.querySelectorAll("th").forEach(th => th.classList.remove("th-sort-asc", "th-sort-desc"));
//     table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-sort-asc", asc); 
//     table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-sort-desc", !asc); 
// }

// document.querySelectorAll(".table-sortable th").forEach(headerCell => {
//     headerCell.addEventListener("click", () => {
//         const tableElement = headerCell.parentElement.parentElement.parentElement;
//         const headerIndex = Array.prototype.indexOf.call(headerCell.parentElement.children, headerCell);
//         const currentIsAscending = headerCell.classList.contains("th-sort-asc");

//         sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
//     });
// });
