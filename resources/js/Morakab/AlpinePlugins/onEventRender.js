export default (Alpine) => {
    Alpine.directive("on-event-render", (el, { expression }) => {
        el.addEventListener(expression, function (event) {
            console.log(event);
            console.log(this);
        });
    });
};
