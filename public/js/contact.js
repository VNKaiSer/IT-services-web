
function kiemtraHoTen() {
    let hoTen = $("#name").val();
    let regexHoTen = /^([A-Z]{1}[a-z]*\s{1})*([A-Z]{1}[a-z]*)$/;
    if (hoTen.trim() == "") {
        alert("Bắt buộc phải nhập tên")
        return false;
    }
    if (!regexHoTen.test(hoTen)) {
        alert("Họ tên bắt đầu bằng ký tự in hoa")
        return false;
    }
    return true;
}

function kiemTraEmail() {
    let tenDN = $("#email").val();
    let regexEmail =/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    if (tenDN.trim() == "") {
        alert("Bắt buộc phải nhập email")
        return false;
    }

    if (!regexEmail.test(tenDN)) {
        alert("Email không đúng định dạng")
        return false;
    }
    return true;
}
function kiemtramess() {
    let hoTen1 = $("#mess").val();
    if (hoTen1.trim() == "") {
        alert("Bắt buộc phải nhập nội dung")
        return false;
    }
    return true;
}

function kiemtra() {
    if (!kiemtraHoTen() || !kiemTraEmail() || !kiemtramess())
        return false;
    alert("Gửi thành công")
       return true;
}