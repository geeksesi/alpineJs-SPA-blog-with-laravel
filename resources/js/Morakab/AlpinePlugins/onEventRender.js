export default (Alpine) => {
    Alpine.directive("onEventRender", (el, v, a) => {
        console.log(v);
        console.log(a);
    });
};
