const api = axios.create({
    baseURL: document.querySelector('#apiUrl').value
});

const stateFrom = document.querySelector('#stateFrom');
const stateTo = document.querySelector('#stateTo');
const cityFrom = document.querySelector('#cityFrom');
const cityTo = document.querySelector('#cityTo');
const selectPlan = document.querySelector('#select-plan');
const minutes = document.querySelector('#minutes');
const sendConsult = document.querySelector('#sendConsult');
const modal = document.querySelector('#modal');
const modalOverlay = document.querySelector('#modal-overlay');
const toast = document.querySelector('#toast');

stateFrom.onchange = () => {
    setCities(stateFrom, cityFrom);
}

stateTo.onchange = async () => {
    setCities(stateTo, cityTo);
};

sendConsult.onclick = async (e) => {
    const dddFrom = getSelectValue(cityFrom);
    const dddTo = getSelectValue(cityTo);
    const plan = getSelectValue(selectPlan);

    if (!dddTo || !dddFrom) {
        showToast(`É necessário selecionar estados e cidades`);
        return;
    };

    const response = await api.post(`tariffs/${dddFrom}/${dddTo}/${minutes.value}/${plan == 0? '': plan}`);

    if (!response.data) return;

    createModal(response.data);
}

modalOverlay.onclick = () => {
    modalOverlay.style.display = 'none';
}

modal.onclick = (e) => {
    e.preventDefault();
}

async function setCities(statesElement, citiesEleemnt) {
    const stateId = getSelectValue(statesElement);
    const cities = await getCities(stateId);

    citiesEleemnt.innerHTML = '';

    cities.map((city) => {
        const option = document.createElement('option');
        option.value = city.id;
        option.innerText = `(${city.ddd}) - ${city.name}`;

        citiesEleemnt.appendChild(option);
    });
}

async function getCities(stateId) {
    const response = await api.post(`cities/${stateId}`);

    if (!response.data) return ;

    return response.data;
}

function getSelectValue(select) {
    const selectedOptions = select.options[select.options.selectedIndex];
    return selectedOptions ?  selectedOptions.value : false;
}

function createModal(tariffs) {
    modal.innerText = '';

    let div = createDiv();
    div.appendChild(createDiv(`Minutos:\n${tariffs.minutes}`));
    div.appendChild(createDiv(`Preço por minuto:\nR$ ${tariffs.price}`));
    modal.appendChild(div);

    div = createDiv();
    div.appendChild(createDiv(`Sem plano`));
    div.appendChild(createDiv(`R$ ${tariffs.withoutPlanValue}`));
    modal.appendChild(div);

    tariffs.plans.map((plan) => {
        div = createDiv();
        div.appendChild(createDiv(`${plan.planName}`));
        div.appendChild(createDiv(`R$ ${plan.planValue}`));
        modal.appendChild(div);
    });

    modalOverlay.style.display = 'flex';
}

function createDiv(text = '') {
    const div = document.createElement('div');
    div.innerText = text;

    return div;
}

function showToast(text) {
    const margin = 5;
    const animationTime = 1;
    const showTime = 5;

    toast.style.transition = 'right 0s';

    toast.innerText = text;
    toast.style.display = 'block';

    const tostWidth = toast.offsetWidth;

    toast.style.right = `-${tostWidth}px`;

    toast.style.transition = `right ${animationTime}s`;

    toast.style.display = 'block';
    toast.style.right = `${margin}px`;

    setTimeout(() => {
        toast.style.right = `-${toast.offsetWidth + margin}px`;

        setTimeout(() => {
            toast.style.display = 'none';
            toast.innerText = '';
        }, animationTime * 1000);

    }, (animationTime + showTime) * 1000);
}
