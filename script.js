function getCookieNames() {
	if (document.cookie == "") {
		return []
	}
	let cookies = document.cookie.split(";")
	let aString = []
	for (let i = 0; i < cookies.length; i++) {
		aString.push(cookies[i])
	}
	let ret = []
	aString.forEach((aStr, i) => {
		ret.push(aStr.split("=")[0])
	})
	return ret
}

let cnames = getCookieNames()
if (cnames.length == 0) {
	let el2 = document.createElement("p"),
		el3 = document.createElement("p")

	el2.innerText = "Nie ma ciasteczek do wyświetlenia!!!"
	el3.innerText = "Nie ma ciasteczek do usunięcia!!!"
	el2.style.color = "red"
	el3.style.color = "red"

	$("#name2").append(el2)
	$("#name3").append(el3)

	$("#sub2").hide()
	$("#sub3").hide()
} else {
	cnames.forEach((cname) => {
		let el = document.createElement("p"),
			inpt = document.createElement("input"),
			lbl = document.createElement("label")

		inpt.type = "checkbox"
		inpt.name = "name2[]"
		inpt.value = cname.trim()
		inpt.id = `name2${cname.trim()}`
		inpt.required = true

		lbl.setAttribute("for", `name2${cname.trim()}`)
		lbl.innerText = ` ${cname.trim()}`

		el.append(inpt)
		el.append(lbl)
		$("#name2").append(el)
	})
	cnames.forEach((cname) => {
		let el = document.createElement("p"),
			inpt = document.createElement("input"),
			lbl = document.createElement("label")

		inpt.type = "checkbox"
		inpt.name = "name3[]"
		inpt.value = cname.trim()
		inpt.id = `name3${cname.trim()}`
		inpt.required = true

		lbl.setAttribute("for", `name3${cname.trim()}`)
		lbl.innerText = ` ${cname.trim()}`

		el.append(inpt)
		el.append(lbl)
		$("#name3").append(el)
	})
}

$(".forms").hide()
$("#but1").click((e) => {
	e.preventDefault()
	$(".forms").hide()
	$("#form1").show()
})
$("#but2").click((e) => {
	e.preventDefault()
	$(".forms").hide()
	$("#form2").show()
})
$("#but3").click((e) => {
	e.preventDefault()
	$(".forms").hide()
	$("#form3").show()
})
$("#back").click(() => {
	location.href = "/"
})
