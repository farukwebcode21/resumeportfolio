/*!
 * Start Bootstrap - Personal v1.0.1 (https://startbootstrap.com/template-overviews/personal)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-personal/blob/master/LICENSE)
 */
// This file is intentionally blank
// Use this file to add JavaScript to your project

const getProject = async (URL, loadingDivId, contentDivId) => {
    const loadingDiv = document.getElementById(loadingDivId);
    const contentDiv = document.getElementById(contentDivId);

    loadingDiv.classList.remove("d-none");
    contentDiv.classList.add("d-none");

    try {
        const response = await axios.get(URL);
        response.data.forEach((element) => {
            getHtml(contentDivId, element);
        });
    } catch (error) {
        console.log(error);
    }
    loadingDiv.classList.add("d-none");
    contentDiv.classList.remove("d-none");
};
