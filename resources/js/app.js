import Swal from "sweetalert2";

window.Swal = Swal;

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const blocks = document.querySelectorAll(".block");
const skills = document.querySelectorAll(".Skills");
const projects = document.querySelectorAll(".projects-animate");
const projectTitle = document.querySelectorAll(".projects-title");

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            } else {
                entry.target.classList.remove("show");
            }
        });
    },
    {
        threshold: 0.2,
    },
);

blocks.forEach((block) => {
    observer.observe(block);
});

skills.forEach((skill) => {
    observer.observe(skill);
});

projects.forEach((project) => {
    observer.observe(project);
});

projectTitle.forEach((projecttitle) => {
    observer.observe(projecttitle);
});
