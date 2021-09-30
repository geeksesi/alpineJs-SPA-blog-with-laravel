export default (disabler) => {
    document.querySelectorAll(`a:not(.${disabler})`).forEach(function (e) {
        console.log(this);
        console.log(e);
    });
};
