<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * CodeIgniter PDF Library
 *
 * @package			CodeIgniter
 * @subpackage		Libraries
 * @category		Libraries
 * @author			Muhanz
 * @license			MIT License
 * @link			https://github.com/hanzzame/ci3-pdf-generator-library
 *
 */

require_once(dirname(__FILE__) . '/dompdf/autoload.inc.php');

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf
{
	function createPDF($html, $filename = '', $download = FALSE, $paper = 'A4', $orientation = 'portrait')
	{
		$options = new Options();
		$options->setChroot(FCPATH);
		$options->set('isRemoteEnabled', TRUE);
		$dompdf = new DOMPDF($options);
		$dompdf->load_html($html);
		$dompdf->set_paper($paper, $orientation);
		$dompdf->render();
		if ($download)
			$dompdf->stream($filename . '.pdf', array('Attachment' => 1));
		else
			$dompdf->stream($filename . '.pdf', array('Attachment' => 0));
	}
}
