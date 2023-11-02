import { Route, Routes } from "react-router-dom";
import CountriesList from "./CountriesList";
import CommonLayout from "../Layouts/CommonLayout";

export default function Homepage() {
	return (
		<>
			<Routes>
				<Route path="/" element={<CommonLayout />}>
					<Route path="/" element={<CountriesList />} />
				</Route>
			</Routes>
		</>
	);
}
