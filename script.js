
//1.Them document-card
// Lấy phần tử nút "+" và container chứa các document card
const addButton = document.getElementById('addButton');
const documentGrid = document.getElementById('documentGrid');

// Lắng nghe sự kiện nhấn vào nút "+"
addButton.addEventListener('click', function () {
    // Tạo một phần tử div mới có class là "document-card"
    const newDocumentCard = document.createElement('div');
    newDocumentCard.classList.add('document-card');

    // Tạo icon, tiêu đề và ngày cho document mới
    newDocumentCard.innerHTML = `
             <i class="fas fa-file-alt fa-3x document-icon"></i>
             <p class="title">Tài liệu mới</p>
             <p class="date">Đã mở bây giờ</p>
         `;

    // Thêm document card mới vào grid
    documentGrid.appendChild(newDocumentCard);
});