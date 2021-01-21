function TambahStaff() {
  var username = document.getElementById("username");
  var email = document.getElementById("email");
  var nama_depan = document.getElementById("nama_depan");
  var nama_belakang = document.getElementById("nama_belakang");
  var password = document.getElementById("password");
  var password2 = document.getElementById("password2");
  var text = document.getElementById("staff-js");

  if (
    username.value.length > 1 &&
    email.value.length > 10 &&
    nama_depan.value.length > 1 &&
    nama_belakang.value.length > 1 &&
    password.value.length > 1
  ) {
    text.innerHTML = "Admin Berhasil Di Tambahkan";
    text.style.color = "green";
  } else if (
    password.value.length != password2.value.length ||
    password2.value.length != password.value.length
  ) {
    text.innerHTML = "Konfirmasi Password Tidak Sama";
    text.style.color = "red";
    return false;
  } else {
    text.innerHTML = "Admin Gagal Di Tambahkan";
    text.style.color = "red";
    return false;
  }
}

const Dasbord = document.querySelector(".Dasbord");
let SplitValue = Dasbord.innerHTML.split(" ");

for (let c = 0; c <= SplitValue.length; c++) {
    if(SplitValue[c] == "Staff"){
        const PesanTiket = document.querySelector(".PesanTiket");
        const TransaksiBerhasil = document.querySelector(".TransaksiBerhasil");
        const TransaksiMenunggu = document.querySelector(".TransaksiMenunggu");
        const TransaksiGagal = document.querySelector(".TransaksiGagal");
        const TotalAkun = document.querySelector(".TotalAkun");

        const ctx = document.getElementById('myChart').getContext('2d');
        const getChart = document.getElementById('canvas').getContext('2d');

        let setChart = new Chart(getChart, {
            type: "pie", 
            data: {
                labels: ['Total User', 'Total Tiket', 'Berhasil', 'Menunggu', 'Gagal'],
                datasets: [
                    {
                        label: "Total Data",
                        data: [TotalAkun.value, PesanTiket.innerHTML, TransaksiBerhasil.innerHTML, TransaksiMenunggu.innerHTML, TransaksiGagal.innerHTML],
                        backgroundColor: [
                            'rgba(153, 102, 255, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 1
                    }
                ]
            },
        });

        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total User', 'Total Tiket', 'Berhasil', 'Menunggu', 'Gagal'],
                datasets: [{
                    label: 'Total Data',
                    data: [TotalAkun.value, PesanTiket.innerHTML, TransaksiBerhasil.innerHTML, TransaksiMenunggu.innerHTML, TransaksiGagal.innerHTML],
                    backgroundColor: [
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(153, 102, 255, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    } else if(SplitValue[c] == "Manager"){
        const Pelabuhan = document.querySelector(".PelabuhanManager");
        const Pemesanan = document.querySelector(".PemesananManager");
        const Staff = document.querySelector(".StaffManager");
        const Kapal = document.querySelector(".KapalManager");
        const Manager = document.querySelector(".ManagerValue");

        const ctx = document.getElementById('myChart').getContext('2d');
        const getChart = document.getElementById('canvas').getContext('2d');

        let setChart = new Chart(getChart, {
            type: "pie", 
            data: {
                labels: ['Manager', 'Staff', 'Pelabuhan', 'Kapal', 'Pemesanan'],
                datasets: [
                    {
                        label: "Total Data",
                        data: [Manager.value, Staff.innerHTML, Pelabuhan.innerHTML, Kapal.innerHTML, Pemesanan.innerHTML],
                        backgroundColor: [
                            'rgba(153, 102, 255, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }
                ]
            },
        });

        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Manager', 'Staff', 'Pelabuhan', 'Kapal', 'Pemesanan'],
                datasets: [{
                    label: 'Total Data',
                    data: [Manager.value, Staff.innerHTML, Pelabuhan.innerHTML, Kapal.innerHTML, Pemesanan.innerHTML],
                    backgroundColor: [
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(153, 102, 255, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }
}