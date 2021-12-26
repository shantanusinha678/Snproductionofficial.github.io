function OurApp() {
  return /*#__PURE__*/(
    React.createElement(React.Fragment, null, /*#__PURE__*/
    React.createElement("h1", null, "Tic-Toc"), /*#__PURE__*/
    React.createElement("p", { className: "text-special" }, new Date().getSeconds().toLocaleString())));


}

setInterval(function () {
  ReactDOM.render( /*#__PURE__*/React.createElement(OurApp, null), document.getElementById('app'));
}, 1000);