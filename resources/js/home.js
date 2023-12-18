import dayjs from "dayjs";
import numeral from "numeral";

dayjs.locale("th");
const today = dayjs().format("DD MMMM BBBB");
const month = dayjs().format("MMMM BBBB");
const evaluated = document.querySelector('[name="evaluated"]');
const period = document.querySelector('[name="period"]');

if (evaluated) {
    evaluated.innerHTML = today;
}

if (period) {
    period.innerHTML = month;
}

const agency = document.querySelector('select[name="agency"]');
const agencyName = document.querySelector('span[name="agency"]');

if (agency && agencyName) {
    agency.onchange = () => {
        agencyName.innerHTML = agency.options[agency.selectedIndex].text;
        renderTable();
    };
}

renderTable();

function renderTable() {
    const table = document.querySelector("table tbody");

    if (table && agency && data) {
        let tr = "";

        const rows = data[agency.value].slice(4);
        rows.forEach((column, index) => {
            tr += `<tr class="align-top">
            <td class="text-center">${index + 1}</td>
            <td>${column[0]}</td>
            <td>${column[1]}</td>
            <td>
                <ul class="list-none m-0 p-0">
                    <li class="py-1 border-b">ผลการดำเนินงานจากตัวชี้วัด Departmental KPI</li>
                    <li class="py-1 border-b">ผลการดำเนินงานจากตัวชี้วัด Individual KPI</li>
                    <li class="py-1 border-b">ผลการดำเนินงานเมื่อปรับน้ำหนักรวมทั้ง<br />Departmental KPI และ Individual KPI</li>
                </ul>
            </td>
            <td>
                <ul class="list-none m-0 p-0">
                    <li class="pl-8 py-1">${column[2]}</li>
                    <li class="pl-8 py-1">${column[4]}</li>
                    <li class="pl-8 py-1"></li>
                </ul>
            </td>
            <td>
                <ul class="list-none m-0 p-0">
                    <li class="text-end pr-5 py-1">
                    ${numeral(column[3]).format("0%")}
                    </li>
                    <li class="text-end pr-5 py-1">
                    ${numeral(column[5]).format("0%")}
                    </li>
                    <li class="text-end pr-5 py-1">
                    ${numeral(column[3] + column[5]).format("0%")}
                    </li>
                </ul>
            </td>
            <td>
                <ul class="list-none m-0 p-0">
                    <li class="text-end pr-5 py-1">
                    &nbsp;
                    </li>
                    <li class="text-end pr-5 py-1">
                    &nbsp;
                    </li>
                    <li class="text-end pr-5 py-1 bg-yellow-200">
                    ${column[6]}
                    </li>
                </ul>
            </td>
            </tr>`;
        });

        table.innerHTML = tr;
    }
}
