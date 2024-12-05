// import { ref } from 'vue'
import { useUserStore } from '@/stores/user'

export function useIdGenerator(fieldType, fieldName) {
	let prefix
	fieldName = fieldName.toString()

	switch (fieldType) {
		case 'text':
			prefix = 'txt'
			break
		case 'button':
			prefix = 'btn'
			break
		case 'email':
			prefix = 'eml'
			break
		case 'password':
			prefix = 'pwd'
			break
		case 'radio':
			prefix = 'rdo'
			break
		case 'label':
			prefix = 'lbl'
			break
		case 'select':
			prefix = 'sel'
			break
		case 'legend':
			prefix = 'leg'
			break
		case 'error':
			prefix = 'err'
			break
		default:
			prefix = 'txt'
			break
	}

	return {
		inputId: prefix + fieldName[0].toUpperCase() + fieldName.toLowerCase().slice(1)
	}
}

export function useValidationErrorIdGenerator(field) {
	return {
		valErrorId: 'valError' + field[0].toUpperCase() + field.toLowerCase().slice(1)
	}
}

export function useDisplayablePassword(pwd, reveal = false) {
    const user = useUserStore()

	if (user.preferences.formatPassword && pwd.length > 0) {
		const x = Math.ceil(user.preferences.formatPasswordBy < 1
			? pwd.length * user.preferences.formatPasswordBy
			: user.preferences.formatPasswordBy)
			
		const chunks = pwd.match(new RegExp(`.{1,${x}}`, 'g'));
		if (chunks) {
			pwd = chunks.join(' ')
		}
	}

	return user.preferences.showOtpAsDot && !reveal ? pwd.replace(/[0-9]/g, '●') : pwd
}

export function startsWithUppercase(str) {
    return str.substr(0, 1).match(/[A-Z\u00C0-\u00DC]/);
}