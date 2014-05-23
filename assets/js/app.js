var apiUrl = '/ExpeditionTK/services/';
var apiRestUrl = '/ExpeditionTK/api/services/';
$(document).ready(function() {
    initForm();
    loadingGif(false);
    initUpdatebarang();
    initUpdateBarang2();
});

$(document).ready(function() {
    $('.bxslider').bxSlider({
        mode: 'horizontal',
        useCSS: true,
        infiniteLoop: false,
        hideControlOnEnd: true,
        easing: 'easeOutElastic',
        speed: 1000
    });
});

function initForm() {
    $(".tab_tarif").click(function() {
        $("select[name=kota_tujuan]").val("Bandung");
        $("select[name=kota_asal]").val("Bandung");
        $("input[name=berat]").val("");
        $("select[name=paket_pengiriman]").val("regular");
        $(".cek_tarif_result").css("display", "none");
    });
    $(".tab_status").click(function() {
        $("input[name=id]").val("");
        $(".cek_status_kirim_result").css("display", "none");
    });
    $(".tab_lokasi").click(function() {
        $("select[name=kota]").val("Bandung");
        $(".tampilkan_agen_result").css("display", "none");
    });
    $("button[name=cek_tarif]").click(function() {
        showTarif();
    });
    $("button[name=cek_status]").click(function() {
        showStatusKirim();
    });
    $("button[name=show_agen]").click(function() {
        showAgen();
    });
}

function showAgen() {
    loadingGif(true);
    var kota = $("select[name=kota]").val();
    $.get(apiRestUrl + "agens/kota/Bandung/format/json", {
        kota: kota
    }, function(data, status) {
        if(status === "success") {
            $(".tampilkan_agen_result").css("display", "block");
            if (data !== null) {
                $(".tampilkan_agen_result").html(tableHTML(data));
                initShowMap();
                loadingGif(false);
            }
        }
    });
}

function initShowMap() {
    $(".tk_map").click(function() {
        loadingGif(true);
        var latitude = $(this).data("latitude");
        var longitude = $(this).data("longitude");
        $(".modal-title").html("Peta " + $(this).html());
        $.get(apiRestUrl + "map/longitude/"+longitude+"/latitude/"+latitude+"/format/json", {
        }, function(data, status) {
            $(".tampilkan_agen_result").css("display", "block");
            if (data !== null) {
                $(".modal-img").attr("src", data.url);
                $('#myModal').modal('toggle');
            }
            loadingGif(false);
        });
    });
}

function tableHTML(dataAgenJSON) {
    var html = "<table class='table table-bordered'>";
    html += "<th>No.</th>";
    html += "<th>Alamat</th>";
    html += "<th>Telepon</th>";
    for (var i = 0; i < dataAgenJSON.length; i++) {
        html += "<tr>";
        html += "<td>";
        html += (i + 1);
        html += "</td>";
        html += "<td class='tk_map' data-longitude='" + dataAgenJSON[i].longitude + "' data-latitude='" + dataAgenJSON[i].latitude + "'>";
        html += dataAgenJSON[i].alamat;
        html += "</td>";
        html += "<td>";
        html += dataAgenJSON[i].telepon;
        html += "</td>";
        html += "</tr>";
    }
    html += "</table>";
    return html;
}

function showStatusKirim() {
    loadingGif(true);
    var id = $("input[name=id]").val();
    if (validateNumber("input[name=id]")) {
        $.get(apiRestUrl + "status/id/" + id + "/format/json", {
        }, function(data, status) {
            $(".cek_status_kirim_result").css("display", "block");
            if (status === "success") {
                if (data.status !== "TELAH DITERIMA") {
                    $(".cek_status_kirim_result").html("Paket anda: " + data.status);
                } else if (data.status === "TELAH DITERIMA") {
                    $(".cek_status_kirim_result").html("Paket anda: " + data.status + " oleh " + data.penerima.nama);
                }
            } else {
                $(".cek_status_kirim_result").html("Nomor pengiriman tidak ditemukan");
            }
            loadingGif(false);
        });
    } else {
        $(".cek_status_kirim_result").css("display", "block");
        $(".cek_status_kirim_result").html("Nomor pengiriman harus diisi dan berupa angka.");
        loadingGif(false);
    }
}

function showTarif() {
    loadingGif(true);
    var kotaPenerima = $("select[name=kota_tujuan]").val();
    var kotaPengirim = $("select[name=kota_asal]").val();
    var berat = $("input[name=berat]").val();
    var paket = $("select[name=paket_pengiriman]").val();
    if (validateNumber("input[name=berat]")) {
        $.get(apiRestUrl + "tarif/kota_penerima/"+ kotaPenerima +"/berat/"+ berat +"/kota_pengirim/"+ kotaPengirim +"/paket/"+ paket +"/format/json", {
        }, function(data, status) {
            $(".cek_tarif_result").css("display", "block");
            if(status === "success") {
                if (berat !== "") {
                    $(".cek_tarif_result").html("Biaya paket Rp. " + nilaiRupiah(data.tarif));
                } else {
                    $(".cek_tarif_result").html("Berat paket belum Anda isi.");
                }
            }
            loadingGif(false);
        });
    } else {
        $(".cek_tarif_result").css("display", "block");
        $(".cek_tarif_result").html("Berat paket harus diisi dan berupa angka bulat.");
        loadingGif(false);
    }
}

function nilaiRupiah(jumlah) {
    var titik = ".";
    var nilai = new String(jumlah);
    var pecah = [];
    while (nilai.length > 3)
    {
        var asd = nilai.substr(nilai.length - 3);
        pecah.unshift(asd);
        nilai = nilai.substr(0, nilai.length - 3);
    }

    if (nilai.length > 0) {
        pecah.unshift(nilai);
    }
    nilai = pecah.join(titik);
    return nilai;
}

function loadingGif(show) {
    if (show) {
        $(".loadingimg").css("display", "block");
    } else {
        $(".loadingimg").css("display", "none");
    }
}

function validateNumber(elemen) {
    var value = $(elemen).val();
    var regex = /^[0-9]*$/;
    return regex.test(value) && value.length > 0;
}

function initUpdatebarang() {
    $("button[name=tandai1]").click(function() {
        $.post(apiRestUrl + "barang/format/json", {
            id: $("input[name=id]").val(),
            status: $("select[name=status]").val()
        }, function(data, status) {
            var respon = "Tidak berhasil diupdate";
            if(status === "success") {
                respon = "Berhasil diupdate";
            }
            $("input[name=id]").val("");
            $(".tampilkan_agen_result").css("display", "block");
            $(".tampilkan_agen_result").html(respon);
            loadingGif(false);
        });
    });
}

function initUpdateBarang2() {
    $("button[name=tandai2]").click(function() {
        $.post(apiRestUrl + "laporan/format/json", {
            onlineshop: $("input[name=onlineshop]").val()
        }, function(data, status) {
            $(".cek_tarif_result").css("display", "block");
            $(".cek_tarif_result").html(data);
            loadingGif(false);
        });
    });
}