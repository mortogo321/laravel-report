import "./bootstrap";

import $ from "jquery";
import select2 from "select2";
select2($);

$(".select2").select2();

import dayjs from "dayjs";
import "dayjs/locale/th";
import buddhistEra from "dayjs/plugin/buddhistEra";

dayjs.extend(buddhistEra);
