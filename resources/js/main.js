// Inputs
let inputTitle = document.querySelector("#title");
let inputImg = document.querySelector("#img");
let inputDuration = document.querySelector("#duration");
let inputPlot = document.querySelector("#plot");
let categoryCheckboxes = document.querySelectorAll(
    ".form-check-input[type='checkbox']"
);
let inputDate = document.querySelector("#date");
// Previews
let previewTitle = document.querySelector("#preview-title");
let previewImg = document.querySelector("#preview-img");
let previewDetailTitle = document.querySelector("#preview-detail-title");
let previewDetailPlot = document.querySelector("#preview-detail-plot");
let previewDetailDuration = document.querySelector("#preview-detail-duration");
let previewDetailImg = document.querySelector("#preview-detail-img");
let previewCategories = document.querySelector("#preview-detail-categories");
let previewDate = document.querySelector("#preview-detail-date ");
// Button
let previewButton = document.querySelector("#previewButton");
let previewSection = document.querySelector("#previewSection");

// Logica anteprima createFilm

previewButton.addEventListener("click", () => {
    previewSection.classList.toggle("d-none");
    if (previewButton.textContent == "Anteprima") {
        previewButton.textContent = "Nascondi";
    } else {
        previewButton.textContent = "Anteprima";
    }
});

inputTitle.addEventListener("input", () => {
    previewDetailTitle.textContent = inputTitle.value || "Titolo Anteprima";
});
inputDuration.addEventListener("input", () => {
    previewDetailDuration.textContent =
        inputDuration.value + " minuti" || "Durata Anteprima";
});
inputPlot.addEventListener("input", () => {
    previewDetailPlot.textContent = inputPlot.value || "Trama Anteprima";
});
inputDate.addEventListener("input", () => {
    console.log(inputDate.value);

    previewDate.textContent = inputDate.value || "Data Anteprima";
});
inputImg.addEventListener("change", () => {
    const file = event.target.files[0];
    if (file) {
        let reader = new FileReader();
        reader.onload = (el) => {
            previewDetailImg.style.backgroundImage = `url('${el.target.result}')`;
        };
        reader.readAsDataURL(file);
    } else {
        previewDetailImg.style.backgroundImage = "";
    }
});

function updateCategoriesPreview() {
    let selectedCategories = Array.from(categoryCheckboxes)
        .filter((checkbox) => checkbox.checked)
        .map((checkbox) => {
            let label = document.querySelector(`label[for="${checkbox.id}"]`);
            return label ? label.textContent.trim() : "";
        });
    previewCategories.textContent =
        selectedCategories.join(", ") || "Nessuna categoria selezionata";
}

categoryCheckboxes.forEach((checkbox) => {
    checkbox.addEventListener("change", updateCategoriesPreview);
});
