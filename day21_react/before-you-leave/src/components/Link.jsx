import { useState } from "react";

const Link = ({ url, text }) => {
	let [state, setState] = useState("stay");

	const handleClick = (e) => {
		if (state === "stay") {
			e.preventDefault();
			setState("leave");
		} else if (state === "leave") {
			setState("stay");
		}
	};
	return (
		<>
			{state === "leave" ? <p>Do you really wanna leave?</p> : null}
			<a onClick={handleClick} className="link" href={url} target="blank">
				{text}
			</a>
		</>
	);
};

export default Link;
