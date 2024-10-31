let addRow = document.getElementById("add-row");
addRow.addEventListener("click", function () {
  let tableAddBorrowing = document
    .getElementById("table_add_borrowing")
    .getElementsByTagName("tbody")[0];
  let newRow = tableAddBorrowing.insertRow(tableAddBorrowing.rows.length);

  let bookTitleCell = newRow.insertCell(0);
  let settingsCell = newRow.insertCell(1);
  let bookTitle = document.getElementById("id_book");
  bookTitle = bookTitle.options[bookTitle.selectedIndex].text;
  let bookId = document.getElementById("id_book").value;

  if (bookId == "") {
    alert("Nama buku tidak boleh kosong");
    return false;
  }

  bookTitleCell.innerHTML =
    bookTitle + "<input type='hidden' name='id_book[]' value='" + bookId + "'>";
  settingsCell.innerHTML =
    "<button type='button' onclick='deleteRow(this)' class='btn btn-sm btn-danger'>Hapus</button>";
});

function deleteRow(button) {
  let row = button.parentNode.parentNode;
  row.parentNode.removeChild(row);
}
