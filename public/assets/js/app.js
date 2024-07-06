var callAPI = (url) => {
    return fetch(url)
        .then(response => response.json())
        .catch(error => {
            console.log('Lỗi callAPI: '.error)
            throw error;
        })
}

callAPI('assets/API/Provinces.json').then(res => {
    var provincesData = res.data.data
    var provinces = document.getElementById('provinces')
    var districts = document.getElementById('districts')
    var wards = document.getElementById('wards')
    // insert provinces vào select
    provincesData.map(provin => provinces.innerHTML += `<option value='${provin.name_with_type}' data-id='${provin.code}'>${provin.name_with_type}</option>}`)

    // lăng nghe sự kiện onchange của option provinces
    provinces.onchange = (e) => {
        //Lấy code của provinces
        var provinceCode = e.target.selectedOptions[0].getAttribute('data-id')
        districts.innerHTML = '<option value="">Chọn quận huyện</option>'
        setTimeout(() => {
            callAPI('assets/API/Districts.json').then(res => {
                districtsData = res.data.data;
                districtsData.filter((disctrict) => disctrict.parent_code === provinceCode).forEach(disc => {
                    districts.innerHTML += `<option value='${disc.name_with_type}' data-id='${disc.code}'>${disc.name_with_type}</option>`
                });

                districts.onchange = (e) => {
                    var districtCode = e.target.selectedOptions[0].getAttribute('data-id')
                    wards.innerHTML = '<option value="">Chọn phường xã</option>'
                    setTimeout(() => {
                        callAPI('assets/API/Wards.json').then(res => {
                            var wardsData = res.data.data
                            wardsData.filter((ward) => ward.parent_code === districtCode).forEach(war => {
                                wards.innerHTML += `<option value='${war.name_with_type}' data-id='${war.code}'>${war.name_with_type}</option>`
                            })
                        })
                    }, 500)
                }
            })
        }, 500);
    }
})