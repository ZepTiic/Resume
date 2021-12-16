const refrences = [
  {
    first: `Justin`,
    last: `Morrison`,
    relation: `Fastenal Manager`,
  },
  {
    first: `Misty`,
    last: `Morrow`,
    relation: `High School Teacher`,
  },
];

let tbRefrences = document.getElementById(`tbRefrences`);
refrences.forEach((refrence, index) => {
  let RefTr = document.createElement(`tr`);
  let number = document.createElement(`td`);
  let first = document.createElement(`td`);
  let last = document.createElement(`td`);
  let relation = document.createElement(`td`);
  number.innerHTML = index + 1;
  first.innerHTML = refrence.first;
  last.innerHTML = refrence.last;
  relation.innerHTML = refrence.relation;
  RefTr.append(number, first, last, relation);
  //   RefTr.append(first);
  //   RefTr.append(last);
  //   RefTr.append(relation);
  tbRefrences.append(RefTr);
});

$(`#Education`).click((e) => {
  $(`#edu_cont`).toggle();
});
