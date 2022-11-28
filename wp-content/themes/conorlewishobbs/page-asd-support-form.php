

<style>
    * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

:root {
    --text-color: #000000;
    --background-color: rgb(255, 255, 255);
    --font-size: (12px);
    --section-background-color: #FAF9F6;
    --section-padding: 20px;
    --section-border-radius: 8px;
    --input-width: 20em;
    --input-width-radio-check-box: 2em;
}

body,
html {
    font-family: 'Roboto', sans-serif;
    line-height: 1.5;
    color: var(--text-color);
    background-color: var(--background-color);
    font-size: var(--font-size);
    width: 100%;
}

form {
    text-align: left;
    border-radius: 5px;
}

section {
    background-color: var(--section-background-color);
    padding: var(--section-padding);
    border-radius: var(--section-border-radius);
}

input[type=text] {
    width: var(--input-width);
    height: 3em;
    border-radius: 5px;
    padding: 12px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
}

input[data-list] {
    width: var(--input-width);
    height: 3em;
    border-radius: 5px;
    padding: 12px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
}

#marital-status,
#nationality,
#ethnic-origin,
#religion {
    width: var(--input-width);
    height: 3em;
    border-radius: 5px;
    padding: 12px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
}

input[type=checkbox] {
    width: var(--input-width-radio-check-box);
    height: 2em;
    border-radius: 5px;
    padding: 12px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
}

label {
    font-size: 1.5em;
    padding: 12px 10px;
}

input[type=date] {
    width: var(--input-width);
    height: 3em;
    border-radius: 5px;
    padding: 12px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
}

input[type=tel] {
    width: var(--input-width);
    height: 3em;
    border-radius: 5px;
    padding: 12px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
}

input[type=e-mail] {
    width: var(--input-width);
    height: 3em;
    border-radius: 5px;
    padding: 12px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
}

input[type=number] {
    width: var(--input-width);
    height: 3em;
    border-radius: 5px;
    padding: 12px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
}

textarea {
    border-radius: 5px;
    width: 100%;
    height: 150px;
    padding: 12px 10px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
}

.address {
    border-radius: 5px;
    width: 50%;
    height: 100px;
    padding: 12px 10px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
}

#title {
    width: var(--input-width);
    height: 3em;
    border-radius: 5px;
    padding: 12px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
}

input[type=submit] {
    width: var(--input-width);
    height: 3em;
    border-radius: 5px;
    padding: 12px 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
}

.radio-button-container,
.checkbox-button-container {
    display: inline-flex;
    align-items: center;
}


/*.header {
    display: flex;
    flex-direction: column;
    justify-items: center;
    justify-content: space-between;
    align-items: center;
    overflow: hidden;
    width: 100%;
    height: 200px;
    padding: 10px;
}*/

.logo {
    grid-area: logo;
}

.h1 {
    grid-area: h1;
}

.logo img {
    width: 100px;
    height: 100px;
}

.footer {
    display: flex;
    flex-direction: column;
    justify-items: center;
    align-items: center;
    overflow: hidden;
    width: 100%;
    height: 100px;
    padding: 10px;
}

span {
    font-size: 1.5em;
}

.support-worker-application-form {
    display: grid;
    align-items: flex-start;
    width: 100%;
    padding: 0.5em 2.5em;
}

.personal-details,
.employment-history,
.driving-licence,
.disciplinary-s-a,
.hours-of-work,
.criminal-Convictions-and-dbs-information,
.references,
.declaration,
.general-data {
    border-top: 2px rgba(0, 0, 0, 0.61) solid;
    border-radius: 2px;
    padding: 5em 5em 5em 1em;
    align-items: flex-start;
    gap: 1em 1em;
}

.personal-details {
    border-top: none;
    display: grid;
    grid-template-columns: 18rem 1fr 1fr;
    grid-template-rows: 1fr 0.5fr 1fr 0.5fr 0.5fr 0.5fr;
    grid-auto-flow: row;
    grid-template-areas: "header header header" "h2 title name" "h2 home-address home-address" "h2 mobile-number date-of-birth-section" "h2 e-mail ni-number" "h2 attached-cv-section attached-cv-section";
}

.header {
    grid-area: header;
    display: flex;
    flex-direction: column;
    justify-items: center;
    align-items: center;
    border-bottom: 2px rgba(0, 0, 0, 0.61) solid;
    padding-bottom: 20px;
}

.personal-details h2 {
    grid-area: h2;
}

.personal-details .title {
    grid-area: title;
}

.personal-details .name {
    grid-area: name;
}

.personal-details .home-address {
    grid-area: home-address;
}

.personal-details .date-of-birth-section {
    grid-area: date-of-birth-section;
}

.personal-details .mobile-number {
    grid-area: mobile-number;
}

.personal-details .e-mail {
    grid-area: e-mail;
}

.personal-details .ni-number {
    grid-area: ni-number;
}

.personal-details .attached-cv-section {
    grid-area: attached-cv-section;
}

.general-data {
    display: grid;
    grid-template-columns: 18rem 1fr 1fr;
    grid-template-rows: 0.5fr 0.5fr 0.5fr 0.5fr 1fr;
    grid-auto-flow: row;
    grid-template-areas: "h2 app-date available-from" "h2 position-applied location-applied" "h2 marital-status-options nationality-options" "h2 ethnic-origin-options religion-options" "h2 details-of-any-disabilities details-of-any-disabilities";
}

.app-date {
    grid-area: app-date;
}

.available-from {
    grid-area: available-from;
}

.position-applied {
    grid-area: position-applied;
}

.location-applied {
    grid-area: location-applied;
}

.marital-status-options {
    grid-area: marital-status-options;
}

.nationality-options {
    grid-area: nationality-options;
}

.ethnic-origin-options {
    grid-area: ethnic-origin-options;
}

.religion-options {
    grid-area: religion-options;
}

.details-of-any-disabilities {
    grid-area: details-of-any-disabilities;
}

.h2 {
    grid-area: h2;
}

.employment-history {
    display: grid;
    grid-template-columns: 18rem 1fr;
    grid-template-rows: 1fr 1fr;
    gap: 0px 20px;
    grid-template-areas: "emp-des employment-history-entries" "emp-des employment-history-entries";
}

.emp-des {
    grid-area: emp-des;
}

.employment-history-entries {
    grid-area: employment-history-entries;
}

.duplicatable-section {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 0.5fr 0.5fr 1fr 1fr;
    gap: 1em 1em;
    grid-auto-flow: row;
    grid-template-areas: "employer start-date end-date" "job-title hourly-rate ." "reason-for-leaving reason-for-leaving reason-for-leaving" "gaps-in-employment gaps-in-employment gaps-in-employment";
}

.employer {
    grid-area: employer;
}

.start-date {
    grid-area: start-date;
}

.end-date {
    grid-area: end-date;
}

.job-title {
    grid-area: job-title;
}

.hourly-rate {
    grid-area: hourly-rate;
}

.reason-for-leaving {
    grid-area: reason-for-leaving;
}

.gaps-in-employment {
    grid-area: gaps-in-employment;
}

.duplicate {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 0.5fr 0.5fr 1fr 1fr;
    gap: 1em 1em;
    padding-top: 1em;
    padding-bottom: 1em;
    border-top: 2px darkgrey solid;
    grid-auto-flow: row;
    grid-template-areas: "employer start-date end-date" "job-title hourly-rate ." "reason-for-leaving reason-for-leaving reason-for-leaving" "gaps-in-employment gaps-in-employment gaps-in-employment";
}

.employer {
    grid-area: employer;
}

.start-date {
    grid-area: start-date;
}

.end-date {
    grid-area: end-date;
}

.job-title {
    grid-area: job-title;
}

.hourly-rate {
    grid-area: hourly-rate;
}

.reason-for-leaving {
    grid-area: reason-for-leaving;
}

.gaps-in-employment {
    grid-area: gaps-in-employment;
}

.driving-licence {
    display: grid;
    grid-template-columns: 18rem 1fr 1fr;
    grid-template-rows: 0.5fr 1fr 0.5fr;
    grid-auto-flow: row;
    grid-template-areas: "h2 hold-driving-licence point-endorsements" "h2 reason-endorsement reason-endorsement" "h2 dl-nub .";
}

.driving-licence .h2 {
    grid-area: h2;
}

.hold-driving-licence {
    grid-area: hold-driving-licence;
}

.point-endorsements {
    grid-area: point-endorsements;
}

.reason-endorsement {
    grid-area: reason-endorsement;
}

.dl-nub {
    grid-area: dl-nub;
}

.criminal-Convictions-and-dbs-information {
    display: grid;
    grid-template-columns: 18rem 1fr;
    grid-template-rows: 0.5fr 1fr 0.5fr 0.5fr;
    grid-auto-flow: row;
    grid-template-areas: "h2 criminal-convictions" "h2 criminal-convictions-exp" "h2 DBS-certificate-number" "h2 reg-dbs-update";
}

.criminal-Convictions-and-dbs-information h2 {
    grid-area: h2;
}

.criminal-convictions {
    grid-area: criminal-convictions;
}

.criminal-convictions-exp {
    grid-area: criminal-convictions-exp;
}

.DBS-certificate-number {
    grid-area: DBS-certificate-number;
}

.reg-dbs-update {
    grid-area: reg-dbs-update;
}

.disciplinary-s-a {
    display: grid;
    grid-template-columns: 18rem 1fr;
    grid-template-rows: 0.5fr 0.5fr 0.5fr 1fr;
    grid-auto-flow: row;
    grid-template-areas: "h2 sub-to-disciplinary" "h2 ill-med-stop-work" "h2 sick-days" "h2 details-disciplinary-sickness";
}

.disciplinary-s-a h2 {
    grid-area: h2;
}

.sub-to-disciplinary {
    grid-area: sub-to-disciplinary;
}

.ill-med-stop-work {
    grid-area: ill-med-stop-work;
}

.sick-days {
    grid-area: sick-days;
}

.details-disciplinary-sickness {
    grid-area: details-disciplinary-sickness;
}

.details-disciplinary-sickness {
    grid-area: details-disciplinary-sickness;
}

.hours-of-work {
    display: grid;
    grid-template-columns: 18rem 1fr;
    grid-template-rows: 0.5fr 0.5fr 0.5fr 0.5fr 1fr;
    grid-auto-flow: row;
    grid-template-areas: "h2 looking-for-work" "h2 if-full-time" "h2 aware-sleep-in" "h2 cant-sleep-in-reason" "h2 external-commitments";
}

.hours-of-work h2 {
    grid-area: h2;
}

.looking-for-work {
    grid-area: looking-for-work;
}

.if-full-time {
    grid-area: if-full-time;
}

.aware-sleep-in {
    grid-area: aware-sleep-in;
}

.cant-sleep-in-reason {
    grid-area: cant-sleep-in-reason;
}

.external-commitments {
    grid-area: external-commitments;
}

.references {
    display: grid;
    grid-template-columns: 18rem 1fr;
    grid-template-rows: 0.2fr 1fr 1fr;
    grid-template-areas: "h2 p" "reference1 reference1" "reference2 reference2";
}

.references h2 {
    grid-area: h2;
}

.references .p {
    grid-area: p;
}

.references .reference1 {
    grid-area: reference1;
}

.references .reference2 {
    grid-area: reference2;
}

.reference1 {
    display: grid;
    grid-template-columns: 18rem 1fr 1fr;
    grid-template-rows: 0.5fr 1fr 0.5fr 0.5fr;
    gap: 2em 2em;
    border-top: 2px rgba(169, 169, 169, 0.349) solid;
    padding-top: 1em;
    padding-bottom: 1em;
    grid-auto-flow: row;
    grid-template-areas: "h3 titles name" "h3 Address Address" "h3 mobile-number e-mail" "h3 relationship-to-you relationship-to-you";
}

.reference1 h3 {
    grid-area: h3;
    display: flex;
    justify-content: right;
}

.reference1 .titles {
    grid-area: titles;
}

.reference1 .name {
    grid-area: name;
}

.reference1 .address1 {
    grid-area: Address;
}

.reference1 .mobile-number {
    grid-area: mobile-number;
}

.reference1 .e-mail {
    grid-area: e-mail;
}

.reference1 .relationship-to-you {
    grid-area: relationship-to-you;
}

.reference2 {
    display: grid;
    grid-template-columns: 18rem 1fr 1fr;
    grid-template-rows: 0.5fr 1fr 0.5fr 0.5fr;
    gap: 2em 2em;
    border-top: 2px rgba(169, 169, 169, 0.349) solid;
    padding-top: 2em;
    grid-auto-flow: row;
    grid-template-areas: "h3 titles name" "h3 Address Address" "h3 mobile-number e-mail" "h3 relationship-to-you relationship-to-you";
}

.reference2 h3 {
    grid-area: h3;
    display: flex;
    justify-content: right;
}

.reference2 .titles {
    grid-area: titles;
}

.reference2 .name {
    grid-area: name;
}

.reference2 .address2 {
    grid-area: Address;
}

.reference2 .mobile-number {
    grid-area: mobile-number;
}

.reference2 .e-mail {
    grid-area: e-mail;
}

.reference2 .relationship-to-you {
    grid-area: relationship-to-you;
}

.emergency-contact {
    display: grid;
    grid-template-columns: 18rem 1fr 1fr;
    grid-template-rows: 0.5fr 1fr 0.5fr 0.5fr;
    gap: 2em 2em;
    border-top: 2px rgba(169, 169, 169, 0.349) solid;
    padding-top: 1em;
    padding-bottom: 1em;
    grid-auto-flow: row;
    grid-template-areas: "h2 titles name" "h2 Address Address" "h2 mobile-number e-mail" "h2 relationship-to-you relationship-to-you";
}

.emergency-contact h2 {
    grid-area: h2;
}

.emergency-contact .titles {
    grid-area: titles;
}

.emergency-contact .name {
    grid-area: name;
}

.emergency-contact .address2 {
    grid-area: Address;
}

.emergency-contact .mobile-number {
    grid-area: mobile-number;
}

.emergency-contact .e-mail {
    grid-area: e-mail;
}

.emergency-contact .relationship-to-you {
    grid-area: relationship-to-you;
}

.declaration {
    display: grid;
    grid-template-columns: 18rem 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr;
    grid-auto-flow: row;
    grid-template-areas: "h2 dec-cont dec-cont dec-cont" ". dec-name dec-signed dec-today-date" ". . send .";
}

.declaration h2 {
    grid-area: h2;
}

.declaration .dec-cont {
    grid-area: dec-cont;
}

.declaration .dec-name {
    grid-area: dec-name;
}

.declaration .dec-signed {
    grid-area: dec-signed;
}

.declaration .dec-today-date {
    grid-area: dec-today-date;
}

.declaration .dec-send {
    grid-area: send;
}

#send:hover {
    background-color: rgba(0, 255, 0, 0.11);
}

#send {
    transition: background-color 1s ease, color 1s ease;
}

#duplicate-section:hover,
a:hover,
.send {
    cursor: pointer;
}

#duplicate-section {
    font-weight: bold;
}

p {
    font-size: 16px;
}

@media only screen and (min-width: 320px) and (max-width: 800px) {
    .header {
        display: none;
    }
    .personal-details {
        border-top: none;
        display: grid;
        grid-template-columns: 0.2fr 0.2fr;
        grid-template-rows: 1fr 0.2fr 0.5fr 0.8fr 0.5fr 0.5fr 0.5fr;
        grid-auto-flow: row;
        grid-template-areas: "header header" "h2 h2" "title name" "home-address home-address" "mobile-number date-of-birth-section" "e-mail ni-number" "attached-cv-section attached-cv-section";
    }
    .header {
        grid-area: header;
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;
        border-bottom: 2px rgba(0, 0, 0, 0.61) solid;
        padding-bottom: 20px;
    }
    .personal-details h2 {
        grid-area: h2;
    }
    .personal-details .title {
        grid-area: title;
    }
    .personal-details .name {
        grid-area: name;
    }
    .personal-details .home-address {
        grid-area: home-address;
    }
    .personal-details .date-of-birth-section {
        grid-area: date-of-birth-section;
    }
    .personal-details .mobile-number {
        grid-area: mobile-number;
    }
    .personal-details .e-mail {
        grid-area: e-mail;
    }
    .personal-details .ni-number {
        grid-area: ni-number;
    }
    .personal-details .attached-cv-section {
        grid-area: attached-cv-section;
    }
    .general-data {
        display: grid;
        grid-template-columns: 0.2fr 0.2fr;
        grid-template-rows: 0.2fr 0.5fr 0.5fr 0.5fr 0.5fr 1fr;
        grid-auto-flow: row;
        grid-template-areas: "h2 h2" "app-date available-from" "position-applied location-applied" "marital-status-options nationality-options" "ethnic-origin-options religion-options" "details-of-any-disabilities details-of-any-disabilities";
    }
    .app-date {
        grid-area: app-date;
    }
    .available-from {
        grid-area: available-from;
    }
    .position-applied {
        grid-area: position-applied;
    }
    .location-applied {
        grid-area: location-applied;
    }
    .marital-status-options {
        grid-area: marital-status-options;
    }
    .nationality-options {
        grid-area: nationality-options;
    }
    .ethnic-origin-options {
        grid-area: ethnic-origin-options;
    }
    .religion-options {
        grid-area: religion-options;
    }
    .details-of-any-disabilities {
        grid-area: details-of-any-disabilities;
    }
    .h2 {
        grid-area: h2;
    }
    .employment-history {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 0.2fr 1fr 1fr;
        gap: 0px 20px;
        grid-template-areas: "emp-des" "employment-history-entries" "employment-history-entries";
    }
    .emp-des {
        grid-area: emp-des;
    }
    .employment-history-entries {
        grid-area: employment-history-entries;
    }
    .duplicatable-section {
        display: grid;
        grid-template-columns: 0.2fr 0.2fr;
        grid-template-rows: 0.5fr 0.5fr 0.5fr 1fr 1fr;
        gap: 1em 1em;
        grid-auto-flow: row;
        grid-template-areas: "employer employer" "start-date end-date" "job-title hourly-rate" "reason-for-leaving reason-for-leaving" "gaps-in-employment gaps-in-employment";
    }
    .employer {
        grid-area: employer;
    }
    .start-date {
        grid-area: start-date;
    }
    .end-date {
        grid-area: end-date;
    }
    .job-title {
        grid-area: job-title;
    }
    .hourly-rate {
        grid-area: hourly-rate;
    }
    .reason-for-leaving {
        grid-area: reason-for-leaving;
    }
    .gaps-in-employment {
        grid-area: gaps-in-employment;
    }
    .duplicate {
        display: grid;
        grid-template-columns: 0.2fr 0.2fr;
        grid-template-rows: 0.5fr 0.5fr 0.5fr 1fr 1fr;
        gap: 1em 1em;
        grid-auto-flow: row;
        grid-template-areas: "employer employer" "start-date end-date" "job-title hourly-rate" "reason-for-leaving reason-for-leaving" "gaps-in-employment gaps-in-employment";
    }
    .employer {
        grid-area: employer;
    }
    .start-date {
        grid-area: start-date;
    }
    .end-date {
        grid-area: end-date;
    }
    .job-title {
        grid-area: job-title;
    }
    .hourly-rate {
        grid-area: hourly-rate;
    }
    .reason-for-leaving {
        grid-area: reason-for-leaving;
    }
    .gaps-in-employment {
        grid-area: gaps-in-employment;
    }
    .driving-licence {
        display: grid;
        grid-template-columns: 0.5fr 0.8fr;
        grid-template-rows: 0.2fr 0.5fr 1fr 0.5fr;
        grid-auto-flow: row;
        grid-template-areas: "h2 h2" "hold-driving-licence point-endorsements" "reason-endorsement reason-endorsement" "dl-nub .";
    }
    .driving-licence .h2 {
        grid-area: h2;
    }
    .hold-driving-licence {
        grid-area: hold-driving-licence;
    }
    .point-endorsements {
        grid-area: point-endorsements;
    }
    .reason-endorsement {
        grid-area: reason-endorsement;
    }
    .dl-nub {
        grid-area: dl-nub;
    }
    .criminal-Convictions-and-dbs-information {
        display: grid;
        grid-template-columns: 0.9fr;
        grid-template-rows: 0.2fr 0.5fr 1fr 0.5fr 0.5fr;
        grid-auto-flow: row;
        grid-template-areas: "h2" "criminal-convictions" "criminal-convictions-exp" "DBS-certificate-number" "reg-dbs-update";
    }
    .criminal-Convictions-and-dbs-information h2 {
        grid-area: h2;
    }
    .criminal-convictions {
        grid-area: criminal-convictions;
    }
    .criminal-convictions-exp {
        grid-area: criminal-convictions-exp;
    }
    .DBS-certificate-number {
        grid-area: DBS-certificate-number;
    }
    .reg-dbs-update {
        grid-area: reg-dbs-update;
    }
    .disciplinary-s-a {
        display: grid;
        grid-template-columns: 0.9fr;
        grid-template-rows: 0.2fr 0.5fr 0.5fr 0.5fr 1fr;
        grid-auto-flow: row;
        grid-template-areas: "h2" "sub-to-disciplinary" "ill-med-stop-work" "sick-days" "details-disciplinary-sickness";
    }
    .disciplinary-s-a h2 {
        grid-area: h2;
    }
    .sub-to-disciplinary {
        grid-area: sub-to-disciplinary;
    }
    .ill-med-stop-work {
        grid-area: ill-med-stop-work;
    }
    .sick-days {
        grid-area: sick-days;
    }
    .details-disciplinary-sickness {
        grid-area: details-disciplinary-sickness;
    }
    .details-disciplinary-sickness {
        grid-area: details-disciplinary-sickness;
    }
    .hours-of-work {
        display: grid;
        grid-template-columns: 0.9fr;
        grid-template-rows: 0.2fr 0.5fr 0.5fr 0.5fr 0.5fr 1fr;
        grid-auto-flow: row;
        grid-template-areas: "h2" "looking-for-work" "if-full-time" "aware-sleep-in" "cant-sleep-in-reason" "external-commitments";
    }
    .hours-of-work h2 {
        grid-area: h2;
    }
    .looking-for-work {
        grid-area: looking-for-work;
    }
    .if-full-time {
        grid-area: if-full-time;
    }
    .aware-sleep-in {
        grid-area: aware-sleep-in;
    }
    .cant-sleep-in-reason {
        grid-area: cant-sleep-in-reason;
    }
    .external-commitments {
        grid-area: external-commitments;
    }
    .references {
        display: grid;
        grid-template-columns: 0.66fr;
        grid-template-rows: 0.05fr 0.05fr 1fr 1fr;
        grid-template-areas: "h2" "p" "reference1" "reference2";
    }
    .references h2 {
        grid-area: h2;
    }
    .references .p {
        grid-area: p;
    }
    .references .reference1 {
        grid-area: reference1;
    }
    .references .reference2 {
        grid-area: reference2;
    }
    .reference1 {
        display: grid;
        grid-template-columns: 0.2fr 0.2fr;
        grid-template-rows: 0.2fr 0.5fr 1fr 0.5fr 0.5fr;
        gap: 1em 1em;
        border-top: 2px rgba(169, 169, 169, 0.349) solid;
        padding-top: 1em;
        padding-bottom: 1em;
        grid-auto-flow: row;
        grid-template-areas: "h3 h3" "titles name" "Address Address" "mobile-number e-mail" "relationship-to-you relationship-to-you";
    }
    .reference1 h3 {
        grid-area: h3;
        display: flex;
        justify-content: left;
    }
    .reference1 .titles {
        grid-area: titles;
    }
    .reference1 .name {
        grid-area: name;
    }
    .reference1 .Address1 {
        grid-area: Address;
    }
    .reference1 .mobile-number {
        grid-area: mobile-number;
    }
    .reference1 .e-mail {
        grid-area: e-mail;
    }
    .reference1 .relationship-to-you {
        grid-area: relationship-to-you;
    }
    .reference2 {
        display: grid;
        grid-template-columns: 0.2fr 0.2fr;
        grid-template-rows: 0.2fr 0.5fr 1fr 0.5fr 0.5fr;
        gap: 1em 1em;
        border-top: 2px rgba(169, 169, 169, 0.349) solid;
        padding-top: 1em;
        padding-bottom: 1em;
        grid-auto-flow: row;
        grid-template-areas: "h3 h3" "titles name" "Address Address" "mobile-number e-mail" "relationship-to-you relationship-to-you";
    }
    .reference2 h3 {
        grid-area: h3;
        display: flex;
        justify-content: left;
    }
    .reference2 .titles {
        grid-area: titles;
    }
    .reference2 .name {
        grid-area: name;
    }
    .reference2 .Address2 {
        grid-area: Address;
    }
    .reference2 .mobile-number {
        grid-area: mobile-number;
    }
    .reference2 .e-mail {
        grid-area: e-mail;
    }
    .reference2 .relationship-to-you {
        grid-area: relationship-to-you;
    }
    .emergency-contact {
        display: grid;
        grid-template-columns: 0.2fr 0.2fr;
        grid-template-rows: 0.2fr 0.5fr 1fr 0.5fr 0.5fr;
        gap: 1em 1em;
        border-top: 2px rgba(169, 169, 169, 0.349) solid;
        padding-top: 1em;
        padding-bottom: 1em;
        grid-auto-flow: row;
        grid-template-areas: "h2 h2" "titles name" "Address Address" "mobile-number e-mail" "relationship-to-you relationship-to-you";
    }
    .emergency-contact h2 {
        grid-area: h2;
    }
    .emergency-contact .titles {
        grid-area: titles;
    }
    .emergency-contact .name {
        grid-area: name;
    }
    .emergency-contact .Address2 {
        grid-area: Address;
    }
    .emergency-contact .mobile-number {
        grid-area: mobile-number;
    }
    .emergency-contact .e-mail {
        grid-area: e-mail;
    }
    .emergency-contact .relationship-to-you {
        grid-area: relationship-to-you;
    }
    .declaration {
        display: grid;
        grid-template-columns: 0.2fr 0.2fr;
        grid-template-rows: 0.2fr 1fr 1fr 1fr;
        grid-auto-flow: row;
        grid-template-areas: "h2 h2" "dec-cont dec-cont" "dec-name dec-signed" "dec-today-date send";
    }
    .declaration h2 {
        grid-area: h2;
    }
    .declaration .dec-cont {
        grid-area: dec-cont;
    }
    .declaration .dec-name {
        grid-area: dec-name;
    }
    .declaration .dec-signed {
        grid-area: dec-signed;
    }
    .declaration .dec-today-date {
        grid-area: dec-today-date;
    }
    .declaration .dec-send {
        grid-area: send;
    }
    .personal-details,
    .employment-history,
    .driving-licence,
    .disciplinary-s-a,
    .hours-of-work,
    .criminal-Convictions-and-dbs-information,
    .references,
    .declaration,
    .general-data {
        border-top: 2px rgba(0, 0, 0, 0.61) solid;
        border-radius: 2px;
        padding: 2em 2em 2em 0.05em;
        align-items: flex-start;
        gap: 1em 1em;
    }
    .personal-details {
        border-top: none;
    }
    input[type=text] {
        width: var(--input-width);
        height: 3em;
        border-radius: 5px;
        padding: 12px 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }
    input[type=radio] {
        width: var(--input-width-radio-check-box);
        height: 2em;
        border-radius: 5px;
        padding: 12px 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }
    input[type=checkbox] {
        width: var(--input-width-radio-check-box);
        height: 2em;
        border-radius: 5px;
        padding: 12px 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }
    label {
        font-size: 1.5em;
        padding: 12px 10px;
    }
    input[type=date] {
        width: var(--input-width);
        height: 3em;
        border-radius: 5px;
        padding: 12px 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }
    input[type=tel] {
        width: var(--input-width);
        height: 3em;
        border-radius: 5px;
        padding: 12px 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }
    input[type=e-mail] {
        width: var(--input-width);
        height: 3em;
        border-radius: 5px;
        padding: 12px 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }
    input[type=number] {
        width: var(--input-width);
        height: 3em;
        border-radius: 5px;
        padding: 12px 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }
    textarea {
        border-radius: 5px;
        width: 100%;
        height: 150px;
        padding: 12px 10px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        resize: none;
    }
    .address {
        border-radius: 5px;
        width: 100%;
        height: 100px;
        padding: 12px 10px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        resize: none;
    }
    #title {
        width: var(--input-width);
        height: 3em;
        border-radius: 5px;
        padding: 12px 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }
    input[type=submit] {
        width: var(--input-width);
        height: 3em;
        border-radius: 5px;
        padding: 12px 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }
    .radio-button-container,
    .checkbox-button-container {
        display: inline-flex;
        align-items: center;
    }
    .send {
        width: var(--input-width);
        height: 3em;
    }
}
    </style>

<form class="support-worker-application-form" action="https://formsubmit.co/sam.wood@asdsupport.co.uk" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_cc" value="info@asdsupport.co.uk">
        <div class="personal-details">
            <div class="header">
                <div class="logo">
                    <img src="http://staging.conorlewishobbs.co.uk/wp-content/uploads/2022/11/asd_support_logo-300x300.png" alt="" width="300" height="300" class="alignnone size-medium wp-image-15" />
                </div>
                <h1>Asd Support Ltd Support worker application form </h1>
            </div>
            <h2>Personal details</h2>
            <section>
                <span>Title</span>
                <br />
                <input list="titles" id="title" name="title" placeholder="Title" minlength="2" maxlength="20" required />
                <datalist id="titles">
                    <option value="Mr"></option>
                    <option value="Mrs"></option>
                    <option value="Miss"></option>
                    <option value="Ms"></option>
                    <option value="Dr"></option>
                </datalist>
            </section>
            <section>
                <span>Name</span>
                <br />
                <input class="name" type="text" name="name" id="name" placeholder="Full name" minlength="2" maxlength="100" required />
            </section>
            <section class="home-address">
                <span>Address</span>
                <br />
                <textarea class="address" id="home-address" name="home-address" rows="5" cols="30" placeholder="Home address and post code" minlength="10" maxlength="200" required></textarea>
            </section>
            <section>
                <span>Mobile number</span>
                <br />
                <input class="mobile-number" type="tel" name="mobile-number" id="mobile-number" placeholder="Mobile number" minlength="7" maxlength="15" required />
            </section>
            <section class="date-of-birth-section">
                <span>Date of birth</span>
                <br />
                <input class="date-of-birth" type="date" name="date-of-birth" id="date-of-birth" required />
            </section>
            <section>
                <span>E-mail</span>
                <br />
                <input class="e-mail" type="e-mail" name="e-mail" id="e-mail" placeholder="E-mail" minlength="5" maxlength="62" required />
            </section>
            <section>
                <span>National insurance number</span>
                <br />
                <input class="ni-number" type="text" name="ni-number" id="ni-number" placeholder="NI number" minlength="9" maxlength="15" required />
            </section>
            <section class="attached-cv-section">
                <span>Have you attached your CV?</span>
                <br />
                <div class="radio-button-container">
                    <input type="radio" name="attached-cv" id="yes" value="yes" />
                    <label for="yes">Yes</label>
                </div>
                <div class="radio-button-container">
                    <input type="radio" name="attached-cv" id="no" value="no" />
                    <label for="no">No</label>
                    <input type="file" name="attachment" id="attach-cv" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,.pdf,application/pdf">
            </section>
            </div>
            <div class="general-data">
                <h2>
                    General data
                </h2>
                <section class="app-date">
                    <span>Application date</span>
                    <br />
                    <input class="app-date" type="date" name="app-date" id="app-date" required />
                </section>
                <section class="available-from">
                    <span>Available to start work from</span>
                    <br />
                    <input class="available-from" type="date" name="available-from" id="available-from" required />
                </section>
                <section class="position-applied">
                    <span>Postion applied for</span>
                    <br />
                    <input class="position-applied" type="text" name="position-applied" id="position-applied" placeholder="Position applied for" minlength="1" maxlength="40" required />
                </section>
                <section class="location-applied">
                    <span>Location applied for</span>
                    <br />
                    <input class="location-applied" type="text" name="location-applied" id="location-applied" placeholder="Location applied for" minlength="1" maxlength="40" required />
                </section>
                <section class="marital-status-options">
                    <span>Marital status</span>
                    <br>
                    <input list="marital-status-options" id="marital-status" name="marital-status" placeholder="Marital status" minlength="1" maxlength="40" required>
                    <datalist id="marital-status-options">
                        <option value="Married"></option>
                        <option value="Single"></option>
                        <option value="Widowed"></option>
                        <option value="Seperated"></option>
                        <option value="Divorced"></option>
                        <option value="Engaged"></option>
                        <option value="In a relationship"></option>
                        <option value="Prefer not to say"></option>
                      </datalist>
                </section>
                <section class="nationality-options">
                    <span>Nationality</span>
                    <br>
                    <input list="nationality-options" id="nationality" name="nationality" placeholder="Nationality" minlength="1" maxlength="40" required>
                    <datalist id="nationality-options">
                        <option value="British"></option>
                        <option value="Republic of Ireland"></option>
                        <option value="India"></option>
                        <option value="Poland"></option>
                        <option value="Germany"></option>
                        <option value="Romania"></option>
                        <option value="Negeria"></option>
                        <option value="Please write in text box if option not listed"></option>
                      </datalist>
                </section>
                <section class="ethnic-origin-options">
                    <span>Ethnic origin</span>
                    <br>
                    <input list="ethnic-origin-options" id="ethnic-origin" name="ethnic-origin" placeholder="Ethnic origin" minlength="1" maxlength="40" required>
                    <datalist id="ethnic-origin-options">
                        <option value="English, Welsh, Scottish, Northern Irish or British"></option>
                        <option value="Irish"></option>
                        <option value="Asian or Asian British"></option>
                        <option value="Black, Black British, Caribbean or African"></option>
                        <option value="Please write in text box if option not listed"></option>
                      </datalist>
                </section>
                <section class="religion-options">
                    <span>Religion</span>
                    <br>
                    <input list="religion-options" id="religion" name="religion" placeholder="Religion" minlength="1" maxlength="40" required>
                    <datalist id="religion-options">
                        <option value="No religion"></option>
                        <option value="Christian"></option>
                        <option value="Buddhist"></option>
                        <option value="Hindu"></option>
                        <option value="Jewish"></option>
                        <option value="Muslim"></option>
                        <option value="Sikh"></option>
                        <option value="Please write in text box if option not listed"></option>
                      </datalist>
                </section>
                <section class="details-of-any-disabilities">
                    <span>Details of any disabilities</span>
                    <br />
                    <textarea class="details-of-any-disabilities-txt" id="details-of-any-disabilities" name="details-of-any-disabilities" rows="5" cols="30" placeholder="Details of any disabilities" minlength="5" maxlength="10000"></textarea>
                </section>
            </div>
            <div class="employment-history">
                <div class="emp-des">
                    <h2>Employment history</h2>
                    <br>
                </div>
                <div class="employment-history-entries">
                    <div class="duplicatable-section">
                        <section>
                            <span>Previous employer</span>
                            <br />
                            <input class="employer" type="text" name="employer" id="employer" placeholder="Company name" minlength="1" maxlength="40" required />
                        </section>
                        <section>
                            <span>Start of employment</span>
                            <br />
                            <input class="start-date" type="date" name="start-date" id="start-date" required />
                        </section>
                        <section>
                            <span>End of employment</span>
                            <br />
                            <input class="end-date" type="date" name="end-date" id="end-date" required />
                        </section>
                        <section>
                            <span>Job title</span>
                            <br />
                            <input class="job-title" type="text" name="job-title" id="job-title" placeholder="Job title" minlength="3" maxlength="30" required />
                        </section>
                        <section>
                            <span>Hourly rate</span>
                            <br />
                            <input class="hourly-rate" type="number" name="hourly-rate" id="hourly-rate" placeholder="Hourly rate" min="1" step=".01" required />
                        </section>
                        <section class="reason-for-leaving">
                            <span>Reason for leaving</span>
                            <br />
                            <textarea class="reason-for-leaving-txt" id="reason-for-leaving" name="reason-for-leaving" rows="5" cols="30" placeholder="Reason for leaving" required minlength="5" maxlength="10000" required></textarea>
                        </section>
                        <section class="gaps-in-employment">
                            <span>Gaps in employment</span>
                            <br />
                            <textarea class="gaps-in-employment-txt" id="gaps-in-employment" name="gaps-in-employment" rows="5" cols="30" placeholder="Please explain any gaps in employment longer than two months" minlength="5" maxlength="10000"></textarea>
                        </section>
                    </div>
                </div>

                <a id="duplicate-section">Add Employment History</a>
            </div>
            <div class="driving-licence">
                <h2>Driving licence</h2>
                <section class="hold-driving-licence">
                    <span>Do you hold a full uk driving licence?</span>
                    <br />
                    <div class="radio-button-container">
                        <input type="radio" name="hold-driving-licence" id="yes" value="yes" />
                        <label for="yes">Yes</label>
                    </div>
                    <div class="radio-button-container">
                        <input type="radio" name="hold-driving-licence" id="no" value="no" />
                        <label for="no">No</label>
                    </div>
                </section>
                <section class="point-endorsements">
                    <span>Have you any points or endorsements?</span>
                    <br />
                    <div class="radio-button-container">
                        <input type="radio" name="point-endorsements" id="yes" value="yes" />
                        <label for="yes">Yes</label>
                        <input type="radio" name="point-endorsements" id="no" value="no" />
                        <label for="no">No</label>
                </section>
                <section class="reason-endorsement">
                    <span>Reason for point endorsements</span>
                    <br />
                    <textarea class="reason-for-point-endorsements" id="reason-for-point-endorsements" name="point-endorsements" rows="5" cols="30" placeholder="Details of points/fines or endorsements" minlength="5" maxlength="10000"></textarea>
                </section>
                <section class="dl-nub">
                    <span>Driving licence number</span>
                    <br />
                    <input class="driving-licence-number" type="text" id="driving-licence-number" name="drivers-license-number" placeholder="Drivers licence number" minlength="17" maxlength="18" />
                </section>
                </div>
                <div class="criminal-Convictions-and-dbs-information">
                    <h2>Criminal Convictions and DBS information</h2>
                    <section class="criminal-convictions">
                        <span>Do you have any criminal convictions?</span>
                        <br />
                        <div class="radio-button-container">
                            <input type="radio" name="criminal-convictions" id="yes" value="yes" />
                            <label for="yes">Yes</label>
                        </div>
                        <div class="radio-button-container">
                            <input type="radio" name="criminal-convictions" id="no" value="no" />
                            <label for="no">No</label>
                    </section>
                    <section class="criminal-convictions-exp">
                        <span>Explanation of criminal convictions</span>
                        <br />
                        <textarea class="criminal-convictions-exp-txt" id="criminal-convictions-exp" name="criminal-convictions-exp" rows="5" cols="30" placeholder="Details of criminal convictions" minlength="5" maxlength="10000"></textarea>
                    </section>
                    <section>
                        <span>DBS certificate number</span>
                        <br />
                        <input class="DBS-certificate-number" type="text" name="DBS-certificate-number" id="DBS-certificate-number" placeholder="DBS number" minlength="1" maxlength="30" />
                    </section>
                    <section class="reg-DBS-update">
                        <span>Are you registered with the DBS update service?</span>
                        <br />
                        <div class="radio-button-container">
                            <input type="radio" name="reg-DBS-update" id="yes" value="yes" />
                            <label for="yes">Yes</label>
                        </div>
                        <div class="radio-button-container">
                            <input type="radio" name="reg-DBS-update" id="no" value="no" />
                            <label for="no">No</label>
                    </section>
                    </div>
                    <div class="disciplinary-s-a">
                        <h2>Disciplinary sickness and absence record</h2>
                        <section class="sub-to-disciplinary">
                            <span>Have you ever been subject to workplace disciplinary
                    proceedings</span>
                            <br />
                            <div class="radio-button-container">
                                <input type="radio" name="sub-to-disciplinary" id="yes" value="yes" />
                                <label for="yes">Yes</label>
                            </div>
                            <div class="radio-button-container">
                                <input type="radio" name="sub-to-disciplinary" id="no" value="no" />
                                <label for="no">No</label>
                        </section>
                        <section class="ill-med-stop-work">
                            <span>Do you have any illness or medical condition which may prevent you
                    from attending work regularly or impact you performing the full
                    demands of the role which you are applying?</span>
                            <br />
                            <div class="radio-button-container">
                                <input type="radio" name="ill-med-stop-work" id="yes" value="yes" />
                                <label for="yes">Yes</label>
                            </div>
                            <div class="radio-button-container">
                                <input type="radio" name="ill-med-stop-work" id="no" value="no" />
                                <label for="no">No</label>
                        </section>
                        <section class="sick-days">
                            <span>Number of days lost to illness in the past two years</span>
                            <br />
                            <input class="sick-day-past-2yr" type="number" name="sick-day-past-2yr" id="sick-day-past-2yr" min="0" max="365" />
                        </section>
                        <section class="details-disciplinary-sickness">
                            <span>Cases of discipliniary action or sickness</span>
                            <br />
                            <textarea class="details-disciplinary-sickness-txt" id="details-disciplinary-sickness" name="details-disciplinary-sickness" rows="5" cols="30" placeholder="Details of any disciplinary or sickness" minlength="5" maxlength="10000"></textarea>
                        </section>
                        </div>
                        <div class="hours-of-work">
                            <h2>Hours of work</h2>
                            <section class="looking-for-work">
                                <span>What type of work are you looking for?</span>
                                <br />
                                <div class="checkbox-button-container">
                                    <input type="checkbox" name="looking-for-work-ft" id="full-time" value="full-time" />
                                    <label for="full-time">Full-time</label>
                                </div>
                                <div class="checkbox-button-container">
                                    <input type="checkbox" name="looking-for-work-pt" id="part-time" value="part-time" />
                                    <label for="part-time">Part-time</label>
                                </div>
                                <div class="checkbox-button-container">
                                    <input type="checkbox" name="looking-for-work-bank" id="bank" value="bank" />
                                    <label for="bank">Bank</label>
                                </div>
                                <div class="checkbox-button-container">
                                    <input type="checkbox" name="looking-for-work-so" id="sleep-only" value="sleep-only" />
                                    <label for="sleep-only">Sleep-only</label>
                                </div>
                            </section>
                            <section class="if-full-time">
                                <span>If full-time, please choose prefered hours</span>
                                <br />
                                <div class="radio-button-container">
                                    <input type="radio" name="if-full-time" id="42" value="42" />
                                    <label for="42">42</label>
                                </div>
                                <div class="radio-button-container">
                                    <input type="radio" name="if-full-time" id="35" value="35" />
                                    <label for="35">35</label>
                            </section>
                            <section class="aware-sleep-in">
                                <span>Are you aware that this role requires you to do sleep-in at
                    night?</span>
                                <br />
                                <div class="radio-button-container">
                                    <input type="radio" name="aware-sleep-in" id="yes" value="yes" />
                                    <label for="yes">Yes</label>
                                </div>
                                <div class="radio-button-container">
                                    <input type="radio" name="aware-sleep-in" id="no" value="no" />
                                    <label for="no">No</label>
                            </section>
                            <section class="cant-sleep-in-reason">
                                <span>Is there any reason you will not be able to do a sleep-in at
                    night?</span>
                                <br />
                                <div class="radio-button-container">
                                    <input type="radio" name="cant-sleep-in-reason" id="yes" value="yes" />
                                    <label for="yes">Yes</label>
                                </div>
                                <div class="radio-button-container">
                                    <input type="radio" name="cant-sleep-in-reason" id="no" value="no" />
                                    <label for="no">No</label>
                            </section>
                            <section class="external-commitments">
                                <span>External commitments</span>
                                <br />
                                <textarea class="external-commitments-txt" id="external-commitments" name="external-commitments" rows="5" cols="30" placeholder="Do you have any external commitments or restrictions in relation to working hours? If yes please detail the days/times that you are unavailable or restricted (this is for rota planning purposes only and will not stop you from being able to work for us."
                                    minlength="5" maxlength="10000"></textarea>
                            </section>
                            </div>
                            <div class="references">
                                <h2>References</h2>
                                <p>
                                    Please provide us with two references one must be your current or most recent employer, or a college tutor. If this is not possible please provide a person who can provide you with a character reference. References must cover at least the previous 5 years
                                    of employment.
                                </p>
                                <div class="reference1">
                                    <h3>Reference one</h3>
                                    <section>
                                        <span>Title</span>
                                        <br />
                                        <input list="titles" id="title" name="reference-1-title" placeholder="Title" maxlength="20" required />
                                        <datalist id="titles">
                        <option value="Mr"></option>
                        <option value="Mrs"></option>
                        <option value="Miss"></option>
                        <option value="Ms"></option>
                        <option value="Dr"></option>
                    </datalist>
                                    </section>
                                    <section>
                                        <span>Name</span>
                                        <br />
                                        <input class="name" type="text" name="reference-1-name" id="name" placeholder="Name" minlength="2" maxlength="100" required />
                                    </section>
                                    <section class="address1">
                                        <span>Address</span>
                                        <br />
                                        <textarea class="address" id="Address" name="reference-1-address" rows="5" cols="30" placeholder="Address" minlength="20" maxlength="10000" required></textarea>
                                    </section>
                                    <section>
                                        <span>Mobile number</span>
                                        <br />
                                        <input class="mobile-number" type="tel" name="reference-1-mobile-number" id="mobile-number" placeholder="Mobile number" minlength="7" maxlength="15" required />
                                    </section>
                                    <section>
                                        <span>E-mail</span>
                                        <br />
                                        <input class="e-mail" type="e-mail" name="reference-1-e-mail" id="e-mail" placeholder="E-mail" minlength="5" maxlength="62" required />
                                    </section>
                                    <section>
                                        <span>Relationship to you</span>
                                        <br />
                                        <input class="relationship-to-you" type="text" name="reference-1-relationship-to-you" id="relationship-to-you" placeholder="Relationship to you" minlength="3" maxlength="60" required />
                                    </section>
                                </div>
                                <div class="reference2">
                                    <h3>Reference two</h3>
                                    <section>
                                        <span>Title</span>
                                        <br />
                                        <input list="titles" id="title" name="reference-2-title" placeholder="Title" maxlength="20" required />
                                        <datalist id="titles">
                        <option value="Mr"></option>
                        <option value="Mrs"></option>
                        <option value="Miss"></option>
                        <option value="Ms"></option>
                        <option value="Dr"></option>
                    </datalist>
                                    </section>
                                    <section>
                                        <span>Name</span>
                                        <br />
                                        <input class="name" type="text" name="reference-2-name" id="name" placeholder="Name" minlength="2" maxlength="100" required />
                                    </section>
                                    <section class="address2">
                                        <span>Address</span>
                                        <br />
                                        <textarea class="address" id="address" name="reference-2-address" rows="5" cols="30" placeholder="Address" minlength="20" maxlength="10000" required></textarea>
                                    </section>
                                    <section>
                                        <span>Mobile number</span>
                                        <br />
                                        <input class="mobile-number" type="tel" name="reference-2-mobile-number" id="mobile-number" placeholder="Mobile number" minlength="7" maxlength="15" required />
                                    </section>
                                    <section>
                                        <span>E-mail</span>
                                        <br />
                                        <input class="e-mail" type="e-mail" name="reference-2-e-mail" id="e-mail" placeholder="E-mail" minlength="5" maxlength="62" required />
                                    </section>
                                    <section>
                                        <span>Relationship to you</span>
                                        <br />
                                        <input class="relationship-to-you" type="text" name="reference-2-relationship-to-you" id="relationship-to-you" placeholder="Relationship to you" minlength="3" maxlength="60" required />
                                    </section>
                                </div>
                            </div>
                            <div class="emergency-contact">
                                <h2>Emergency contact</h2>
                                <section>
                                    <span>Title</span>
                                    <br />
                                    <input list="titles" id="title" name="ec-title" placeholder="Title" maxlength="20" required />
                                    <datalist id="titles">
                    <option value="Mr"></option>
                    <option value="Mrs"></option>
                    <option value="Miss"></option>
                    <option value="Ms"></option>
                    <option value="Dr"></option>
                </datalist>
                                </section>
                                <section>
                                    <span>Name</span>
                                    <br />
                                    <input class="name" type="text" name="emergency-contact-name" id="name" placeholder="Name" minlength="2" maxlength="100" required />
                                </section>
                                <section class="address2">
                                    <span>Address</span>
                                    <br />
                                    <textarea class="address" id="address" name="emergency-contact-address" rows="5" cols="30" placeholder="Address" minlength="20" maxlength="10000" required></textarea>
                                </section>
                                <section>
                                    <span>Mobile number</span>
                                    <br />
                                    <input class="mobile-number" type="tel" name="emergency-contact-mobile-number" id="mobile-number" placeholder="Mobile number" minlength="7" maxlength="15" required />
                                </section>
                                <section>
                                    <span>E-mail</span>
                                    <br />
                                    <input class="e-mail" type="e-mail" name="emergency-contact-e-mail" id="e-mail" placeholder="E-mail" minlength="5" maxlength="62" required />
                                </section>
                                <section>
                                    <span>Relationship to you</span>
                                    <br />
                                    <input class="relationship-to-you" type="text" name="emergency-contact-relationship-to-you" id="relationship-to-you" placeholder="Relationship to you" minlength="3" maxlength="60" required />
                                </section>
                            </div>
                            <div class="declaration">
                                <h2>Declaration</h2>
                                <div class="dec-cont">
                                    <p>
                                        I certify that the information contained in this application is accurate and true. I give my consent to the processing, transfer and disclosure of all information submitted by me during the recruitment process and throughout any subsequent periods of
                                        employment for pre-employment checks, equal opportunities, monitoring, payroll operations and training (data protection act 1988).
                                    </p>
                                </div>
                                <section class="dec-name">
                                    <span>Name</span>
                                    <br />
                                    <input class="name" type="text" name="declaration-name" id="name" placeholder="Name" minlength="2" maxlength="100" required />
                                </section>
                                <section class="dec-signed">
                                    <span>Signed</span>
                                    <br />
                                    <input class="signed" type="text" name="signed" id="signed" placeholder="Signed" minlength="2" maxlength="100" required />
                                </section>
                                <section class="dec-today-date">
                                    <span>Todays date</span>
                                    <br />
                                    <input class="today-date" type="date" name="declaration-today-date" id="today-date" required />
                                </section>
                                <section class="dec-send">
                                    <input class="send" id="send" type="submit" value="Send" />
                                </section>
                            </div>
                            <input type="text" name="_honey" style="display: none;" />
                            <input type="hidden" name="_template" value="table">
    </form>
    <script>
        const duplicateButton = document.querySelector("a#duplicate-section");
        if (duplicateButton) {
            duplicateButton.addEventListener("click", function(event) {
                const duplicatableSection = event.target.parentElement.querySelector(".duplicatable-section");
                if (duplicatableSection) {
                    const entries = event.target.parentElement.querySelector(".employment-history-entries");
                    if (entries) {
                        const duplicate = document.createElement("div");
                        duplicate.classList.add("duplicate");
                        const removeDuplicate =
                            document.createElement("a");
                        removeDuplicate.innerText = "Remove Entry";
                        removeDuplicate.addEventListener("click", function(event) {
                            event.target.parentElement.parentElement.removeChild(duplicate);
                        });
                        duplicate.innerHTML = duplicatableSection.innerHTML;
                        duplicate.appendChild(removeDuplicate);
                        const existingDuplictes = event.target.parentElement.querySelectorAll(".duplicate");
                        const formFields = duplicate.querySelectorAll("[name]");
                        for (let index = 0; index <
                            formFields.length; index++) {
                            formFields[index].setAttribute("name", `${formFields[index].getAttribute("name")}_${(existingDuplictes ? existingDuplictes.length : 0) + 1}`);
                        }
                        entries.appendChild(duplicate);
                    } else {
                        console.log("Couldnt find entries");
                    }
                }
            });
        }
    </script>
</body>

</html>
