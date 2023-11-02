import { Outlet } from "react-router-dom";

export default function CommonLayout() {
	return (
		<div className="layout">
			<header>
				<h1>Where in the world?</h1>
				<p>Dark mode</p>
			</header>
			<Outlet />
		</div>
	);
}
