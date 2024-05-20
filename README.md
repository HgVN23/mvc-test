# Setup
- Tạo db `ql_diem` để import file .sql

# Những thứ đã làm trên web theo mô hình MVC
- Admin (localhost/mvc-test/dashboard):
	+ [ ] Login
	+ [x] Quản lý sản phẩm (CRUD)
	+ [x] Quản lý đơn hàng
		+ [x] Thay đổi trạng thái đơn hàng

- Khách hàng (localhost/mvc-test/):
	+ [ ] Login
	+ Trang chủ:
		+ [x] Hiển thị sản phẩm
		+ [x] Xem chi tiết sản phẩm
		+ [x] Thêm sản phẩm vào giỏ hàng
		+ [x] Bỏ sản phẩm ra khỏi giỏ
	+ Trang Cửa hàng:
		+ [x] Hiển thị sản phẩm
		+ [x] Xem chi tiết sản phẩm
		+ [x] Thêm sản phẩm vào giỏ hàng
		+ [x] Bỏ sản phẩm ra khỏi giỏ
	+ Trang Giỏ hàng:
		+ [x] Hiển thị sản phẩm có trong giỏ
		+ [x] Bỏ sản phẩm ra khỏi giỏ
		+ [x] Cập nhật số lượng sản phẩm
	+ Trang Thanh toán:
		+ [x] Hiển thị sản phẩm sẽ được thanh toán từ giỏ
		+ [x] Thanh toán
		+ [x] Tạo hóa đơn
	+ [x] Trang Lịch sử đặt hàng
		+ [x] Hiển thị các đơn hàng đã đặt

> [!NOTE]
> Phần Import ảnh vào sản phẩm có mỗi tên file ảnh lưu vào db. Ảnh cần phải lưu thủ công vào `public/assets/img`
