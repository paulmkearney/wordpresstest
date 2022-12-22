
const casinoList = {
    dom: {
        casinoList:() => { return document.querySelector('.testing')}
    },
    getCasinoList: () => {
        // engine
        const API_URL = 'https://api.npoint.io/3d929604a0f67308659c/toplists/575';
        const xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    const data = JSON.parse(xhr.responseText);
                    const targetObject = data;
                    
                    let casinoOrder = [];
                    
                    targetObject.forEach(element => {
                        casinoOrder[element.position] = element;
                    });
                    const stageBlock = casinoList.dom.casinoList();
                    stageBlock.innerHTML = casinoList.partials.list();
                    const tableBody = document.querySelector('.jsversion .cmp-casinolist-table tbody');
                    for(let i = 0; i<= casinoOrder.length;i++){
                        try {
                            let elements = casinoList.partials.listRow(casinoOrder[i].logo, casinoOrder[i].brand_id, casinoOrder[i].info.bonus, casinoOrder[i].info.features[0],casinoOrder[i].info.features[1],casinoOrder[i].info.features[2],casinoOrder[i].play_url, casinoOrder[i].terms_and_conditions, casinoOrder[i].info.rating);
                            tableBody.insertAdjacentHTML('beforeend', elements);
                        }catch(e){
                            console.log('error',e)
                        }
                    }

                } else {
                    console.error('There was a problem with the request.');
                }
            }
        };

        xhr.open('GET', API_URL);
        xhr.send();
    },
    partials: {
        listRow: (logoUrl,siteUrl, bonusText, feature1, feature2, feature3, playUrl, termsConditions, starRating) => {

            const stars = starRating === 5 ? casinoList.partials.fiveStars(): (starRating === 4 ? casinoList.partials.fourStars(): casinoList.partials.threeStars());
            return `<tr>
                        <td>
                            <div class="content-container">
                                <a href="${siteUrl}"><img class="cmp-casino-logo" src="${logoUrl}" alt="Casino" /></a>
                                <a href="${siteUrl}" class="cmp-casinolist__link">Review</a>
                            </div>
                        </td>
                        <td>
                            <div class="content-container">
                                ${stars}
                                <p class="cmp-casino__statement">${bonusText}</p>
                            </div>
                        </td>
                        <td>
                            <div class="content-container">
                                <ul class="cmp-casinolist__features">
                                    <li>${feature1}</li>
                                    <li>${feature2}</li>
                                    <li>${feature3}</li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <div class="content-container">
                                <a class="cmp-casinolist__cta" href="${playUrl}">Play Now</a>
                                <p class="cmp-casino-link">${termsConditions}</p>
                            </div>
                        </td>
                    </tr>`
        },
        list: () => { return `<div class="cmp-casinolist-container">
                        <table class="cmp-casinolist-table">
                            <thead>
                                <tr>
                                    <th><span class="table-heading">Bonus</span></th>
                                    <th><span class="table-heading">Casino</span></th>
                                    <th><span class="table-heading">Features</span></th>
                                    <th><span class="table-heading">Play</span></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>`
        },
        threeStars: () => { return `<span class="star-rating" aria-label="four star rating">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path fill="#D29F39" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path fill="#D29F39" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path fill="#D29F39" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#D29F39" d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#D29F39" d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
            </span>`

        },
        fourStars: () => { return `<span class="star-rating" aria-label="four star rating">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path fill="#D29F39" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path fill="#D29F39" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path fill="#D29F39" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path fill="#D29F39" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#D29F39" d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
            </span>`

        },
        fiveStars: () => { return `<span class="star-rating" aria-label="five star rating">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path fill="#D29F39" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path fill="#D29F39" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path fill="#D29F39" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path fill="#D29F39" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path fill="#D29F39" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
            </span>`

        },
        setViewportMeta: ()=> {
            const newMeta = `<meta name="viewport" content="width=device-width, initial-scale=1">`
            document.getElementsByTagName('head')[0].insertAdjacentHTML('beforeend', newMeta);
        }
        
    },
    init: () => {
        console.log('casino list');
        const trigger = document.querySelector('.btn-primary');
        trigger.addEventListener('click', () => {
            casinoList.getCasinoList();
        });
        casinoList.setViewportMeta();
    }
}
document.addEventListener('DOMContentLoaded', (() => {
    casinoList.init();
}));
