console.log("JS je připojený");

let mojeJmeno = "Gabriela";
let mujVek = "nevím";
let jeStudent = true;

let fruits = ["jablko", "banán", "pomeranč"];
fruits.push("mandarinka");     // přidá na konec
fruits.unshift("kiwi");        // přidá na začátek
console.log(fruits[0]);        // kiwi
console.log(fruits.length);    // délka pole

fruits.pop();                  // odstraní poslední prvek
console.log(fruits.includes("banán")); // true/false

let person = {
  name: "Gabriela",
  surname: "Veselíková",
  age: 34,
  hobbies: ["plavání", "jízda na koni", "kolo"],
  isMarried: true,
};

console.log(person.name + " " + person.surname);

person.age = 30;
person.hobbies.push("snowboarding");

console.log(person.hobbies[0]);
console.log(person.hobbies.length);

// Objekt s dětmi
let osoba = {
  name: "Anna",
  kids: {
    kid1: {
      name: "Dítě1",
      age: 1,
      hobbies: ["jídlo", "auta", "letadla"],
    },
    kid2: {
      name: "Dítě2",
      age: 2,
      hobbies: ["jídlo", "auta", "letadla"],
    },
  },
};

console.log(osoba.kids.kid1.name);
console.log(osoba.kids.kid2.hobbies[1]);
osoba.kids.kid1.age = 5;

// Funkce sčítání
function secti(a, b) {
  return a + b;
}

let vypocteno = secti(7, 8);
console.log(vypocteno);

// Převod EUR → CZK
function eurToCZK(value) {
  let rate = 24;
  let czk = value * rate;
  return czk;
}

let vysledekKurzu = eurToCZK(100);
console.log(vysledekKurzu);

// Převod CZK → EUR
function czkToEur(value) {
  let rate = 24;
  let eur = value / rate;
  return eur;
}

let vysledekKurzu2 = czkToEur(2400);
console.log(vysledekKurzu2);

// Objekt auto
let auto = {
  brand: "Audi",
  model: "Q4",
  year: 2014,
  owners: [
    {
      name: "Jirka",
      age: 23,
    },
  ],
  start() {
    console.log("Auto: " + this.brand + " " + this.model);
  },
};

auto.start();