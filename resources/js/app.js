import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



let callAPI = (host) => {
    return fetch(host)
        .then(response => response.json())
        .catch(error => {
            console.log('Error: '. error);
            throw error;
        })
}
callAPI('resources\js\API\Provinces.json').then((res => {
    console.log(res);
}))